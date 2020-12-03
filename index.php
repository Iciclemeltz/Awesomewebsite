<!DOCTYPE html>

<html>
    
    <head>
        <?php
        include "ref.php";
        ?>
        
        
    </head>
 
    <body>
        
        <?php
        include "background.php"
        ?>
                
        <?php
            include "nav.php";
        ?>

        <header class="jumbotron text-center">
            <h1 class="display-4">Welcome to World of Pets!</h1>
            <h2>Home of Singapore's Pet Lovers</h2>
        </header>
    
        <main class="container">
             <section id="dogs">
                <h2>All About Dogs!</h2>
                <div class="row">
                <article class="col-sm">
                <h3>Welsh Corgi</h3>
                <figure>
                    <img src="images/Corgi_small.jpg" alt="Corgi"
                    class = "img-thumbnail" title="View larger image..."/>
                    <figcaption>Welsh Corgi</figcaption>
                </figure>
                    <p> 
                    Corgi is a small type of herding dog that originated in 
                    Wales. Sometimes just known as a Corgi, there are two separate breeds.
                    </p>   
                 </article>
    
            <article class="col-sm">
                <h3>Golden Retriever</h3>
                <figure>
                    <img src="images/Golden_Retriever_small.jpg" alt="Retriever"
                    class = "img-thumbnail" title="View larger image..."/>
                    
                <figcaption>Golden Retriever</figcaption>
                </figure>
                <p> 
                    Golden retrievers have an instinctive love of water, and 
                    are easy to train to basic or advanced obedience standards. 
                </p>
            </article>
    </div>
            </section>
            
            <section id="cats">
                <h2>All About Cats!</h2>
                <div class="row">
                <article class="col-sm">
                <h3>Tabby</h3>
                <figure>
                    <img src="images/tabby_small.jpg" alt="Tabby"
                    class = "img-thumbnail" title="View larger image..."/>
                    <figcaption>Standard Tabby</figcaption>
                </figure>
                <p>
                    A tabby is any domestic cat (Felis catus) with a distinctive 'M' 
                    shaped marking on their forehead.
                </p>
                 </article>
    
            <article class="col-sm">
                <h3>Calico</h3>
                <figure>
                    <img src="images/calico_small.jpg" alt="Calico"
                    class = "img-thumbnail" title="View larger image..."/>         
                <figcaption>Standard Calico</figcaption>
                </figure>
                <p> 
                    A calico cat is a domestic cat with a coat that is 
                    typically 25% to 75% white with large orange and black patches.
                </p>
            </article>
    </div>
            </section>
            
    </main>
        
    <?php
        include "footer.php";
    ?>
        
</body>
</html>
