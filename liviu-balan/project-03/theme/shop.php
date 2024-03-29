<?php
include "include/header.php";
?>

<section class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <h1 class="page-name">Magazin</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Acasa</a></li>
            <li class="active">magazin</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Modal -->
<?php
/*$sql_modal = "SELECT * FROM products ORDER BY name";: Această linie de cod definește o interogare SQL care selectează
toate coloanele din tabelul "products" și le ordonează după nume în ordine alfabetică.

$result_modal = $mysqli->query($sql_modal);: Această linie de cod execută interogarea SQL folosind obiectul $mysqli (o
conexiune la baza de date) și stochează rezultatul în variabila $result_modal.

while ($row_modal = $result_modal->fetch_array(MYSQLI_ASSOC)) { ... }: Acesta este un bloc de cod while care parcurge
fiecare rând din rezultatul interogării SQL și stochează valorile într-un array asociativ numit $row_modal.

În interiorul buclei while, fiecare atribut al produsului este extras din array-ul $row_modal și atribuit unei variabile
corespunzătoare, cum ar fi $name_modal, $price_modal, $description_modal, $image_modal și $id_modal.

echo '<div class="modal product-modal fade" id="product-modal-' . $id_modal . '"> ... </div>';: Acest echo este folosit
pentru a genera HTML-ul pentru fereastra modală asociată produsului curent. Atributele produsului (nume, preț,
descriere, imagine etc.) sunt utilizate pentru a completa conținutul ferestrei modale.

Conținutul ferestrei modale conține o imagine a produsului, detalii despre produs (nume, preț, descriere) și butoane
pentru adăugarea produsului în coșul de cumpărături și vizualizarea detaliilor produsului.

La sfârșitul buclei while, fiecare fereastră modală este complet generată și afișată, iar controlul revine către bucla
principală care afișează produsele.*/

$sql_modal = "SELECT * FROM products ORDER BY name";
$result_modal = $mysqli->query($sql_modal);
while ($row_modal = $result_modal->fetch_array(MYSQLI_ASSOC)) {
  $name_modal = $row_modal["name"];
  $price_modal = $row_modal['price'];
  $description_modal = $row_modal['description'];
  $image_modal = "/liviu-balan/project-03/theme/images/shop/products/" . $row_modal["image"];
  $id_modal = $row_modal["id"];
  echo '<div class="modal product-modal fade" id="product-modal-' . $id_modal . '">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tf-ion-close"></i>
            </button>
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <div class="modal-image">
                                    <img class="img-responsive" src="' . $image_modal . '" alt="product-img" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-short-details">
                                    <h2 class="product-title">' . $name_modal . '</h2>
                                    <p class="product-price">' . $price_modal . ' RON</p>
                                    <p class="product-short-description">' . $description_modal . '</p>
                                    <a href="cart.php" class="btn btn-main">Add To Cart</a>
                                    <a href="product-single.php?product_id=' . $id_modal . '" class="btn btn-transparent">View Product Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}
?>

<section class="products section">
  <div class="container">
    <div class="row">

      <?php
      $sql = "SELECT * FROM products WHERE visible=1";
      $result = $mysqli->query($sql);

      // Associative array
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $name = $row["name"];
        $price = $row['price'];
        $image = "/liviu-balan/project-03/theme/images/shop/products/" . $row["image"];
        $id = $row["id"];
        echo '<div class="col-md-4">
            <div class="product-item">
              <div class="product-thumb">
                <img class="img-responsive" src="' . $image . '" alt="product-img" />
                <div class="preview-meta">
                  <ul>
                    <li>
                      <span data-toggle="modal" data-target="#product-modal-' . $id . '">
                        <i class="tf-ion-ios-search-strong"></i>
                      </span>
                    </li>
                    <li>
                      <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="tf-ion-android-cart"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="product-content">
                <h4><a href="product-single.php">' . $name . '</a></h4>
                <p class="price">' . $price . ' RON</p>
              </div>
            </div>
          </div>';
      }
      ?>

    </div>
  </div>
</section>

<?php
include "include/footer.php";
/*
 * Pentru a face butonul "Adaugă în coș" funcțional și a permite adăugarea produsului în coșul de cumpărături în
 * momentul în care utilizatorul dă clic pe el, trebuie să facem următoarele modificări:

Modificarea link-ului butonului "Adaugă în coș": În loc să ducă utilizatorul către pagina "cart.php" atunci când
face clic pe buton, trebuie să facem o solicitare de tip POST către acea pagină, trimițând informațiile necesare
despre produs (cum ar fi ID-ul produsului).

Manipularea solicitării POST în pagina "cart.php": Pagina "cart.php" trebuie să primească solicitarea POST și să
extragă informațiile despre produs pentru a le adăuga în coșul de cumpărături.

Iată cum putem implementa aceste modificări:

Modificarea butonului "Adaugă în coș" în pagina de listare a produselor (index.php sau altă pagină corespunzătoare):
php
Copy code
<a href="cart.php?action=add&id=<?= $id ?>" class="btn btn-main">Adaugă în coș</a>
Manipularea solicitării POST în pagina "cart.php":
php
Copy code
<?php
// Verificăm dacă a fost trimisă o solicitare POST și dacă este pentru adăugarea unui produs în coș
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "add") {
    // Verificăm dacă ID-ul produsului a fost trimis
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
        // Salvăm ID-ul produsului într-o variabilă
        $product_id = $_GET["id"];

        // Adăugăm logica pentru a adăuga produsul în coșul de cumpărături
        // Aceasta poate implica adăugarea produsului într-un coș de cumpărături temporar sau într-o bază de date
        // În acest exemplu, doar afișăm un mesaj de confirmare că produsul a fost adăugat în coș
        echo "Produsul cu ID-ul $product_id a fost adăugat în coșul de cumpărături.";
    } else {
        // Dacă ID-ul produsului lipsește, afișăm un mesaj de eroare
        echo "ID-ul produsului lipsă. Nu s-a putut adăuga produsul în coșul de cumpărături.";
    }
}
?>
Acesta este un exemplu simplificat de cum puteți implementa adăugarea produsului în coșul de cumpărături. Veți avea
nevoie de o logică mai complexă pentru gestionarea coșului de cumpărături într-o aplicație reală, inclusiv adăugarea
produselor într-o bază de date și gestionarea stocului, precum și afișarea coșului de cumpărături și procesarea
comenzilor.
*/
?>
