<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use App\Entity\Brand;
use App\Entity\Categories;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
    }


    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url =  $this->adminUrlGenerator->setController(UserCrudController::class)->generateUrl();
         return $this->redirect($url);

    }


  public function configureDashboard(): Dashboard
  {
      return Dashboard::new()
          // the name visible to end users
          ->setTitle('Crud')
          // you can include HTML contents too (e.g. to link to an image)
          ->setTitle('<img style="width: 70px" src="../../../assets/img/logo.png"> Crud Sneakers Store <span class="text-small">Corp.</span>')


          // the path defined in this method is passed to the Twig asset() function
          ->setFaviconPath('../../../assets/img/logo.png')

          // the domain used by default is 'messages'
          ->setTranslationDomain('my-custom-domain')

          // there's no need to define the "text direction" explicitly because
          // its default value is inferred dynamically from the user locale
          ->setTextDirection('ltr')

          // set this option if you prefer the page content to span the entire
          // browser width, instead of the default design which sets a max width
          ->renderContentMaximized()

          // set this option if you prefer the sidebar (which contains the main menu)
          // to be displayed as a narrow column instead of the default expanded design
          //->renderSidebarMinimized()

          // by default, all backend URLs include a signature hash. If a user changes any
          // query parameter (to "hack" the backend) the signature won't match and EasyAdmin
          // triggers an error. If this causes any issue in your backend, call this method
          // to disable this feature and remove all URL signature checks
          ->disableUrlSignatures()

          // by default, all backend URLs are generated as absolute URLs. If you
          // need to generate relative URLs instead, call this method
          ->generateRelativeUrls()
          ;
  }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::section('Users');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add User', 'fas fa-plus', User::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Users', 'fas fa-eye', User::class)
        ]);

        yield MenuItem::section('Products');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Product', 'fas fa-plus', Product::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Products', 'fas fa-eye', Product::class)
        ]);

        yield MenuItem::section('Categories');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Category', 'fas fa-plus', Categories::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Categories', 'fas fa-eye', Categories::class)
        ]);

        yield MenuItem::section('Brands');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Brand', 'fas fa-plus', Brand::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Brands', 'fas fa-eye', Brand::class)
        ]);

        yield MenuItem::section('Address');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Address', 'fas fa-plus', Address::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Addressess', 'fas fa-eye', Address::class)
        ]);

        yield MenuItem::section('Orders');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Order', 'fas fa-plus', Order::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Order', 'fas fa-eye', Order::class)
        ]);

        yield MenuItem::section('Order Items');
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Order item to order', 'fas fa-plus', OrderItem::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show all Order Item', 'fas fa-eye', OrderItem::class)
        ]);





        //yield MenuItem::linkToCrud('The Label', 'fas fa-list', User::class);
    }
}
