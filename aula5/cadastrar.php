<?php 
    include 'head.php'; 
    include 'header.php'; 

?>


    <div class="container d-flex align-items-center justify-content-center login">
        
            <form action="adicionar_action.php" method="post">
                <h2>Registrar</h2>
                <div class="mb-3">
                    <label for="">
                        Nome:
                        <input type="text" name="name" class="form-control" >
                    </label>
                </div>
                <div class="mb-3">
                    <label for="">
                        E-mail:
                        <input type="email" name="email" class="form-control" />
                    </label>
                </div>
                
    
                <input type="submit" name="sendButton" class="btn btn-primary" />
            </form>        
    </div>


<?php include 'footer.php'; ?>