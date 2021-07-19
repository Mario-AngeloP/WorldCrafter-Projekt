<!-- Start Menu -->

<div class="menu-box">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="heading-title text-center">

                    <h2>Unsere Produkte</h2>

                    <p>Hier ist eine volle Auflistung unserer Produkte</p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <div class="special-menu text-center">

                    <div class="button-group filter-button-group">

                        <button class="active" data-filter="*">Alle</button>

                        <button data-filter=".spielmodus">Spielmodi</button>

                        <button data-filter=".system">Systeme</button>

                        <button data-filter=".service">Dienstleistungen</button>

                    </div>

                </div>

            </div>

        </div>
        <div class="row special-list">
            <?php
                include("./php/connect.php");

                $sql = "select * from products;";
                $statement = $link->prepare($sql);
                $statement->execute();
                $result = $statement->get_result();
                mysqli_stmt_close($statement);

                #<img src='data:image/png;base64,'" .  $row['image'] . "' class='img-fluid' alt='Image'>
                # <img src='images/img-04.jpg' class='img-fluid' alt='Image'>

                while($row = $result->fetch_assoc()) {
                    $price = $row['price'];
                    echo "<div class='col-lg-4 col-md-6 special-grid " . $row['type'] . "'>
                        <div class='gallery-single fix'>
                        <img src='data:image/png;base64," .  $row['image'] . "' class='img-fluid' alt='Image'>
                                <div class='why-text'>
                                    <h4>" . $row['name'] . "</h4>
                                    <p>" . $row['description'] . "</p>
                                    <h5>" . ($price == 0 ? "Kostenlos <a href='" . $row['link'] . "' style='font-size:12px'>Herunterladen</a>" : $price) . "</h5>
                                </div>
                        </div>
                    </div>";
                }
                include("./php/disconnect.php");
            ?>
        </div>

    </div>

</div>

<!-- End Menu -->



<!-- Start QT -->

<div class="qt-box qt-background">

    <div class="container">

        <div class="row">

            <div class="col-md-8 ml-auto mr-auto text-left">

            <p class="lead ">

                    "Der Begriff Qualität in der Programmierung steckt noch in den Anfängen."

                </p>

                <span class="lead">Wau Holland</span>

            </div>

        </div>

    </div>

</div>

<!-- End QT -->

