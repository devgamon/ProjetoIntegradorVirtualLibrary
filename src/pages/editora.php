<?php include('../components/biblioteca.php'); ?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");
* {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  border: none;
  outline: none;
  text-decoration: none;
  -webkit-transition: .2s linear;
  transition: .2s linear;
}

body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: default;
          flex-direction: default;
  min-height: 100vh;
  width: 100%;
}

.container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  min-height: 100vh;
  width: 100%;
}

.container .navbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: default;
      -ms-flex-align: default;
          align-items: default;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-height: 100vh;
  width: 15%;
  position: fixed;
  left: 0;
  top: 0;
  background: #35187f;
}

.container .navbar .logoBox {
  text-align: center;
}

.container .navbar .logoBox img {
  width: 12rem;
}

.container .navbar ul li a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: default;
      -ms-flex-pack: default;
          justify-content: default;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: default;
          flex-direction: default;
  margin: 8px 0;
  padding: 14px 12px;
  color: #fff;
}

.container .navbar ul li a span {
  margin-left: 20px;
}

.container .navbar ul li a:hover {
  padding-left: 20px;
  background: #fff;
  color: #35187f;
}

.container .containerGen {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-height: 100vh;
  width: 100%;
}

.container .containerGen .header {
  padding: 2rem 0rem;
  width: 60%;
}

.container .containerGen .header i {
  font-size: 3rem;
  margin-bottom: 1rem;
  color: #35187f;
}

.container .containerGen .header h2 {
  text-align: left;
  color: #35187f;
}

.container .containerGen .header p {
  color: rgba(0, 0, 0, 0.5);
  font-size: 0.8rem;
}

.container .containerGen .modalContainer {
  text-align: left;
  width: 60%;
}

.container .containerGen .modalContainer .btnAdd {
  background: none;
  color: #35187f;
  cursor: pointer;
  padding: 0.6rem 1.2rem;
}

.container .containerGen .modalContainer #fade {
  min-height: 100%;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 5;
}

.container .containerGen .modalContainer #modal {
  position: fixed;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 500px;
  max-width: 90%;
  background-color: #fff;
  padding: 1.2rem;
  border-radius: 0.5rem;
  z-index: 10;
}

.container .containerGen .modalContainer #fade, .container .containerGen .modalContainer #modal {
  -webkit-transition: 0.5s;
  transition: 0.5s;
  opacity: 1;
  pointer-events: all;
}

.container .containerGen .modalContainer .modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: default;
          flex-direction: default;
  padding: 1rem;
}

.container .containerGen .modalContainer .modal-header .text {
  display: flex;
}

.container .containerGen .modalContainer .modal-header .text i {
  font-size: 2rem;
  margin-RIGHT: 1rem;
  color: #35187f;
}

.container .containerGen .modalContainer .modal-header h2 {
  color: #35187f;
}

.container .containerGen .modalContainer .modal-header #close-modal {
  cursor: pointer;
  font-size: 1.5rem;
  padding: 1rem;
  color: red;
  background: none;
}

.container .containerGen .modalContainer .modal-body form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.container .containerGen .modalContainer .modal-body form input {
  margin: 0.2rem;
  padding: 0.6rem;
  width: 100%; 
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.container .containerGen .modalContainer .modal-body form textarea {
  margin: 0.2rem;
  padding: 0.6rem;
  width: 100%;    
}

.container .containerGen .modalContainer .modal-body form .numberBox {
    display: flex;
    text-align: center;
    width: 100%;
}

.container .containerGen .modalContainer .modal-body form .numberBox input, .container .containerGen .modalContainer .modal-body form .numberBox select {
    width: 50%;
    margin: 0.2rem;
    padding: 0.6rem;
}

.container .containerGen .modalContainer .modal-body form .numberBox select {
  color: rgba(0, 0, 0, 0.7);
}

.container .containerGen .modalContainer .modal-body form input[type="submit"] {
  cursor: pointer;
  color: #fff;
  background: #35187f;
}

.container .containerGen .modalContainer #modal.hide, .container .containerGen .modalContainer #fade.hide {
  opacity: 0;
  pointer-events: none;
}

.container .containerGen .modalContainer #modal.hide {
  top: 0;
}

.container .containerGen table {
  width: 60%;
}

.container .containerGen table tr th {
  color: #35187f;
  padding: 1rem 0.4rem;
}

.container .containerGen table tr td {
  padding: 1rem 0.4rem;
  font-size: 0.8rem;
  color: rgba(0, 0, 0, 0.5);
  border-top: 1px solid rgba(95, 95, 95, 0.2);
  border-collapse: collapse;
  text-align: center;
}

.container .containerGen table tr td a i {
  color: rgba(0, 0, 0, 0.5);
}

.container .containerGen table tr td a i:hover {
  color: red;
}

.container .formContainer form input {
  padding: 0.2rem 1rem;
}
/*# sourceMappingURL=cadastros.css.map */
</style>

    <div class="container">
        <nav class="navbar">
            <div class="ul">
                <div class="logoBox"><img src="https://virtuallibrary.profrodolfo.com.br/public/logoW.png" alt="virtuallibrary"></div>
                <ul>
                    <li>
                        <a href="homeAdm.php">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            <i class="fa-solid fa-users"></i>
                            <span>Usuários</span>
                        </a>
                    </li>
                    <li>
                        <a href="autor.php">
                            <i class="fa-solid fa-user-graduate"></i>
                            <span>Autores</span>
                        </a>
                    </li>
                    <li>
                        <a href="genero.php">
                            <i class="fa-solid fa-address-book"></i>
                            <span>Gêneros</span>
                        </a>
                    </li>
                    <li>
                        <a href="editora.php">
                            <i class="fa-solid fa-marker"></i>
                            <span>Editoras</span>
                        </a>
                    </li>
                    <li>
                        <a href="book.php">
                            <i class="fa-solid fa-book"></i>
                            <span>LIvros</span>
                        </a>
                    </li>
                    <li>
                        <a href="emprestimo.php">
                            <i class="fa-solid fa-repeat"></i>
                            <span>Emprestimos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="logout">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="containerGen">
            <div class="header">
                <h2>Editoras Cadastradas</h2>
                <p>Você pode adicionar, visualizar e editar novas editoras.</p>
            </div>

            <div class="modalContainer">
                <button class="btnAdd" id="open-modal"><i class="fa-solid fa-plus"></i> Adicionar Editora</button>
                <div id="fade" class="hide"></div>

                <div id="modal" class="hide">
                    <div class="modal-header">
                      <div class="text">
                          <i class="fa-solid fa-marker"></i>
                          <h2>Cadastrar Editora</h2>
                        </div>
                        <button id="close-modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">
                        <form method="POST">
                            <input type="text" name="editora" id="editora" placeholder="Digite uma Editora">
                            <input type="submit" id="enviar" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>

            <?php
                if(isset($_POST['editora'])){
                    CadastrarEditora($_POST['editora']);
                }
            ?>

            <br>
                
            <table>
                <tr>
                    <th>Editora</th>
                    <th>Ações</th>
                </tr>
                <?php
                    if(isset($_GET['excluir_listEdit'])){
                        ExcluirEditora($_GET['excluir_listEdit']);
                    }

                    $funcEdit = ExibirEditora("");
                    while($listEdit = $funcEdit->fetch_object()){
                        echo '<tr>
                                <td>'.$listEdit->nome.'</td>
                                <td><a href="?excluir_listEdit='.$listEdit->cd.'"><i class="fa-solid fa-trash-can"></i></a></td>                  
                              </tr>';
                    }
                ?>
            </table>
        </div>
    </div>

    <script src="../components/modal.js"></script>
    <script src="https://kit.fontawesome.com/07cc412226.js" crossorigin="anonymous"></script>