<?PHP

    class homeController  
    {
        function __construct()
        {
            include('model/home.php');
           $this->obj = new homeModel();

        }
        function home()
        {
            $arr = $this->obj->page(1);
            // print_r($arr);
            include 'view/header.php';
            include 'view/page.php';
            include 'view/footer.php';
            // echo "home";
        }
        function about(){
            
            $arr = $this->obj->page(2);
            // print_r($arr);
            include 'view/header.php';
            include 'view/page.php';
            // echo "about";
        }
        function contact(){
            
            $arr = $this->obj->page(3);
            // print_r($arr);
            include 'view/header.php';
            include 'view/page.php';
            // echo "Contact us";
        }
    }
    
?>