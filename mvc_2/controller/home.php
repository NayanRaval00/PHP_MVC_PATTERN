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
            $arr = $this->obj->home();
            // print_r($arr);
            include 'view/header.php';
            include 'view/page.php';
            include 'view/footer.php';
            // echo "home";
        }
        function about(){
            
            $arr = $this->obj->about();
            // print_r($arr);
            include 'view/header.php';
            include 'view/page.php';
            // echo "about";
        }
        function contact(){
            
            $arr = $this->obj->contact();
            // print_r($arr);
            include 'view/header.php';
            include 'view/page.php';
            // echo "Contact us";
        }
    }
    
?>