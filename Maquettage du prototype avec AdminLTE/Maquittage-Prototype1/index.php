<?php
$title ="<h1 class='py-4 '>Gestion des projet</h1>";
//" Header Compenent 
ob_start();

?>


<div class="card-header input-group mb-3">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">

            <div class="input-group rounded">
                <input type="search" class="form-control rounded" style="width: 150px; height: 40px;" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <div class="input-group-append">
                    <span class="input-group-text border-0" id="search-addon">
                    </span>
                </div>
                <div class="form-group input-group-sm mb-0 col-3">
                    <select class="form-select" style="width: 150px; height: 40px;" aria-label="Default select example">
                        <option value="Projet1">Planification CNMH</option>
                        <option value="Projet2">Front end</option>
                        <option value="Projet3">Back end</option>
                        <option value="Projet4">Maquettage</option>
                        <option value="Projet5">Database</option>
                    </select>
                </div>
                <!-- <i class="fas fa-search"></i> -->

                <div class="text-end"> <!-- Adjust the column width as needed -->
                    <a href="AjouteProjet.php" class="btn btn-success">Ajouté Projets</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
$Header = ob_get_clean();



// Body Compenent
ob_start();

?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nom Du Projet</th>
            <th>Date De Début</th>
            <th>Date De Fin</th>
            <th style="width:500px; max-width: 500px;">Description</th>
            <th>Tâche</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="">Planéfication CNMH</td>
            <td class="">2023-11-08</td>
            <td class="">2023-11-10</td>
            <td class="">
                Lorem ipsum dolor sit amet consectetur,
            </td>
            <td class="text-center">
                <a href="./tache.php"><i class="fa-solid fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">front end </td>
            <td class="">2023-11-11</td>
            <td class="">2023-11-15</td>
            <td class="">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </td>
            <td class="text-center">
                <a href="./tache.php"><i class="fa-solid fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">maquettage</td>
            <td class="">2023-11-16</td>
            <td class="">2023-11-20</td>
            <td class="">
                Dolor optio culpa eos totam consectetur animi,
            </td>
            <td class="text-center">
                <a href="./tache.php"><i class="fa-solid fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">back end </td>
            <td class="">2023-11-21</td>
            <td class="">2023-11-24</td>
            <td class="">
                nam eaque, vero praesentium ullam quam modi iure iusto tempora reiciendis
                debitis ipsa, rerum
                commodi.
            </td>
            <td class="text-center">
                <a href="./tache.php"><i class="fa-solid fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>
        <tr>
            <td class="">database</td>
            <td class="">2023-11-25</td>
            <td class="">2023-11-27</td>
            <td class="">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem expedita ea
                aliquam iure cumque
                necessitatibus sequi porro illo vero sint suscipit eligendi, facere dolorum
                recusandae animi.
                Inventore nihil consequuntur quisquam!
            </td>
            <td class="text-center">
                <a href="./tache.php"><i class="fa-solid fa-eye"></i></a>
            </td>
            <td class="text-center">
                <a href="" class="bg-danger py-1 px-2 rounded"><i class="fa-solid fa-trash-can"></i></a>
                <a href="" class="bg-primary py-1 px-2 rounded"><i class="fa-solid fa-pencil"></i></a>
            </td>
        </tr>

    </tbody>
</table>
<?php
$Body = ob_get_clean();



// Footer Compenent
ob_start();
?>
<ul class="pagination pagination-sm m-0 float-right">
    <li class="page-item"><a class="page-link" href="#">«</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>
<?php
$Footer = ob_get_clean();

include("layout.php");