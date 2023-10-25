
    <?php
        require "vendor/autoload.php";
    
        $page = $_GET['page'] ?? ''; 
        
        switch ($page) {
            case '':
                require ('controller/index.controller.php');
            break;
            
            case 'login':
                require ('controller/login.controller.php');
            break;
            case 'registrar':
                require ('controller/registrar.controller.php');
            break;
            case 'funcionarios':
                require ('controller/funcionarios.controller.php');
            break;    
            default:      
        }
    ?>

    </php ?>