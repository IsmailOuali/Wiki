 <?php
require '../model/wiki.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['searchTerm'])) {

// if(@$_POST['submitSearch']){
    // }
    
    // }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitSearch'])) {
        
        
            $search = $_POST['submitSearch'];
    
    $log = wiki::searchwiki($search);
        
    
}
    