<div class="container">
    <h1 class="heading">Ask a question</h1>


    <form action="./server/requests.php" method="post">


        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter question here">
        </div>

        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="description">Description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter question here"></textarea>
        </div>

        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="description">Category</label>
            <?php
            include('category.php');
            
            ?>
        </div>


        <div class="sm-3 col-6 offset-sm-3 mt-2 margin-bottom-15">
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </div>

    </form>

</div>