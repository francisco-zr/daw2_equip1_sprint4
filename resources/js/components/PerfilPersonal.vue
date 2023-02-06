<template>
    <div class="container">
      <div class="main-body">
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <div class="mt-3">
                    <h4>Tatiana Valentinyova</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <table class="table table-striped" style="width: 800px; height: 300px; max-width: 450%;">
                      <thead>
                        <tr>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>Nombre</td>
                          <td>Tatiana</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Apellidos</td>
                          <td>Valentinyova</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Nombre de usuario</td>
                          <td>Tatiana17</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Email</td>
                          <td>tatianavalentiny@gmail.com</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Teléfono</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Empresa</td>
                          <td>Pymeralia</td>
                        </tr>
                      </tbody>
                    </table>
                    <router-link to="/editarPerfil">
                      <button class="slide">
                        <span>Editar Perfil</span>
                      </button>
                    </router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
 <style>
 .container {
   display: flex;
   align-items: center;
   justify-content: center;
   height: 100vh;
 }
 
 .main-body {
   width: 80%;
 }
 
 .card {
   box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 }
 
 .d-flex {
   display: flex;
 }
 
 .flex-column {
   flex-direction: column;
 }
 
 .align-items-center {
   align-items: center;
 }
 
 .text-center {
   text-align: center;
 }
 
 .table {
   margin-top: 20px;
 }
 
 .slide {
   background-color: #4CAF50;
   color: white;
   border: none;
   border-radius: 5px;
   padding: 5px 15px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin-top: 20px;
 }
 </style>
 