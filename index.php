<?php
ob_start();
//include header
    include('header.php');
?>
         
<?php
    /*include Banner Area */
     include('Template/_banner-area.php');
    /*include Banner Area */
?>
<?php
    /*include Top Sale Area */
     include('Template/_top-sale.php');
    /*include Top Sale Area */
?>    
<?php 
       /*include Special Price Area */
      include('Template/_special-price.php');
       /*include Special Price Area */
?>     

<?php 
       /*include Banner ads Area */
      include('Template/_banner-adds.php');
       /*include Banner ads Area */
?>          
<?php 
       /*include New Phones Area */
      include('Template/_new-phones.php');
       /*include New Phones Area */
?>  
<?php 
       /*include Latest Blogs Area */
      include('Template/_blogs.php');
       /*include Latest Blogs Area */
?>           
           
       
  
  <?php
  //inculde footer.php
  include('footer.php');
  ?>