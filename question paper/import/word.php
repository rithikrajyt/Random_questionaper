<?php
 $doc_body =
 include 'final.php';
 include 'database.php';
 ;
 ?>
 <form name="proposal_form" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post"">
  <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" />
</form>
<?php
  if(isset($_POST['submit_docs'])){
          header("Content-Type: application/vnd.msword");
          header("Expires: 0");//no-cache
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
          header("content-disposition: attachment;filename=sampleword.doc");
  }         
          echo "<html>";
          echo "$doc_body";
          echo "</html>";      
?> 
