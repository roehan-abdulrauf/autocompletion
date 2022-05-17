<main>
    <div class="margin-dg">
        <h2>Animes VOSTFR</h2>
        <form action="search&json.php" method="POST" id="formdata" onsubmit="return submitHandler()">
            <div>
                <input type="search" id="searcher" name="searcher" autocomplete="off" placeholder="Rechercher un anime ..." oninput="search(this.value)">
            </div>
        </form>
    </div>
    <section class="products" id="products">

        <div class="box-container">


        </div>

    </section>
    <script src="js/index.js"></script>
</main>