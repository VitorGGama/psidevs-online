<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../../css/dist/build.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Ubuntu:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Psidevs | Meu Perfil</title>
</head>
<body class="bg-secondary">
  <header class="container_header">
    <div class="container_header_desktop">
      <div class="header_logo py-2">
        <h1><a href="index.php"><img src="../../../assets/logo-branca.svg" class="w-11/12 ps-2 sm:ps-0" alt="Logo Psidevs, Plataforma Online"></a></h1>
      </div>
      <div class="header_perfil hidden lg:flex">
        <div class="header_perfil_nome pe-5 text-neutral-100 font-ubuntu">
          <p>Josefa Ferreira</p>
          <p class="font-medium">Perfil</p>
        </div>
        <div class="header_perfil_avatar">
          <img src="../../../assets/cliente-avatar.svg" alt="Avatar cliente">
        </div>
      </div>
      <div class="container_header_mobile lg:hidden z-10">
        <span class=" cursor-pointer" onclick="Openbar()">
          <img src="../../../assets/icone-menu.svg" class="pe-2 sm:pe-0" alt="menu">
        </span>
        <div class="sidebar">
          <div class="text-gray-100 text-xl">
            <div class="header_sidebar p-2.5 rounded-md">
              <div class="container_header_mobile_avatar text-lg font-medium text-neutral-700">
                <img src="../../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
                <p class="">Minha conta</p>
              </div>
              <i class="bi bi-x cursor-pointer bg-tertiary py-2 px-3 rounded-md text-primary text-2xl" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">
            <ul>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-home.svg" alt="Casa">
                <span class="textMenuMobile">Home</span>
              </li>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-calendario.svg" alt="Calendário">
                <span class="textMenuMobile">Minhas consultas</span>
              </li>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-historico.svg" alt="Relógio">
                <span class="textMenuMobile">Histórico de consultas</span>
              </li>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-perfil.svg" alt="Boneco">
                <span class="textMenuMobile">Meu perfil</span>
              </li>
              <li class="my-4 text-gray-600"></li>
            </ul>
            <ul class="pt-5 space-y-2 border-t border-gray-200">
              <li class="linkMenuMobile mt-0">
                <img src="../../../assets/icone-sair.svg" alt="Porta">
                <span class="textMenuMobile">Sair</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
    <div class="container_bg">
      <div class="container_sub_header_bg">
        <div class="container_sub_header">
          <h2 class="container_sub_header_saudacao">Boa tarde, Josefa Ferreira</h2>
          <div class="container_header_marcar_consulta_botao_bg z-10">
              <a href="#" class="container_header_marcar_consulta_botao"><img src="../../../assets/icone-plus.svg" class="pe-2" alt="Sinal de adição">Marcar consulta</a>
          </div>
        </div>
      </div>
      <div class="container_principal">
        <div class="container_navbar">
          <div class="container_navbar_conteudo lg:sticky lg:top-5">
            <div class="container_navbar_conteudo_avatar text-xl font-medium text-neutral-700 pt-3">
              <img src="../../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
              <p>Minha conta</p>
            </div>
            <nav class="text-primary text-lg font-medium mt-4">
              <ul>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-home.svg" class="pe-3.5" alt="Casa">Início</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-calendario.svg" class="pe-3.5" alt="Calendário">Minhas consultas</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-historico.svg" class="pe-3.5" alt="Relógio">Histórico de consultas</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-perfil.svg" class="pe-3.5" alt="Boneco">Meu perfil</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar border-t border-gray-900/20"><img src="../../../assets/icone-sair.svg" class="pe-3.5" alt="Porta">Sair</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="container_conteudo">
          <div class="container_conteudo_perfil_bg card_bg">
            <div class="container_conteudo_perfil_estrutura">

           <!-- Form Dados gerais -->
              <form method="post" id="form-atualizar" name="form-atualizar" >
                <div class="container-foto grid grid-flow-row-dense grid-rows-5 grid-cols-1 gap-4 sm:grid-cols-4 sm:grid-rows-2 ">
                  <div class="foto-upload row-span-3 flex justify-center sm:row-span-2 sm:justify-start">                 
                    <label for="dropzone-file" class="flex flex-col items-center justify-center  max-w-xs h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <img class="foto-upload row-span-3 flex justify-center sm:row-span-2 sm:justify-start" src="../../../assets/cliente-avatar.svg" alt="image description" style="background-color: #9FA9FF;" width="190" height="240">
                      <!-- <div class="flex flex-col items-center justify-center pt-6 pb-5 m-3">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                      </div> -->
                      <input id="dropzone-file" accept="image/png, image/jpeg" type="file" class="hidden" />
                    </label>
                  </div>
                  <div class="foto-botoes lg:col-span-3">
                    <div>
                      <label type="button" class="perfil_botao bg-primary mr-4">
                      CARREGAR NOVA FOTO
                        <input id="file" name="file-perfil" accept="image/png, image/jpeg" type="file" class="hidden" />
                      </label>
                    </div>
                    
                    <button type="button" class="perfil_botao text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg ">
                      SEM FOTO 
                    </button>
                  </div>

                  <div class="foto-legenda">
                    <label class="text-gray-500 font-bold">
                      <span class="text-sm"> JPG ou PNG permitidos. (Tamanho máx. 800k) </span>
                    </label>
                  </div>
                </div>


          <!-- input DADOS GERAIS-->
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nome</label>
                              <input type="text" id="nome" name="nome" placeholder="Josefa" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>
                      <!-- Emai -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">E-mail</label>
                              <input placeholder="nome@email.com" type="email" id="email" name="email" id="large-input"  class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>

                     <!-- TELEFONE -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Telefone</label>
                              <input type="tel" id="telefone" name="telefone" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>

                      <!-- GENERO -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Gênero</label>
                            <select id="genero" name="genero" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected></option>
                              <option value="nao-binario">Não Binário</option>
                              <option value="feminino">Feminino</option>
                              <option value="masculino">Masculino</option>
                            </select>
                          </div>
                      </div>

                      <!-- CPF -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>
                      
                      <!-- DATA DE NASCIMENTO -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Data de Nascimento</label>
                            <input type="date" id="data" name="data" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>

                      <!-- SENHA -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Senha</label>
                            <input type="password" id="senha" name="senha" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••">
                            <button type="button" name="alterar-senha" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-primary rounded-r-lg border hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Alterar senha
                            </button>
                          </div>
                      </div>

                      <div class="text-center sm:col-span-6 sm:text-left">
                        <button id="atualizar" name="atualizar" type="submit" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                      </div>

                    </div>
              </form>

                      
           <!-- FORM - Area do profissional -->
                <form method="post" id="form-atualizar-pro" name="form-atualizar-pro" >
                  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="flex flex-wrap border-t-2 border-primary mt-8 sm:col-span-6 sm:flex-nowrap sm:justify-between sm:items-center sm:px-4">
                          <h2 class= "text-lg text-primary font-semibold pb-1 mt-5 w-full sm:text-xl sm:w-1/2">Área Profissional</h2>
                          <button class=" mt-5 inline-flex justify-center items-center"> 
                              <a href="#" class="border-2 border-primary bg-secondary rounded-full inline-flex text-primary font-semibold py-3.5 px-5 hover:bg-primary/90 hover:text-neutral-100 transition duration-150 ease-in-out"> Adicionar Formação +</a>
                          </button>
                      </div>

                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">CRP</label>
                            <input type="text" id="crp" name="crp" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>

                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Região</label>
                            <select id="regiao" name="regiao" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected></option>
                              <option selected></option>
                            </select>
                          </div>
                      </div>

                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Especialidade</label>
                            <select id="especialidade" name="especialidade" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected></option>
                              <option selected></option>
                            </select>
                          </div>
                      </div>

                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Experiência</label>
                            <select id="experiencia" name="experiencia" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-white sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected></option>
                              <option selected></option>
                            </select>
                          </div>
                      </div>

                      
                      <div class="flex flex-wrap sm:col-span-6 sm:items-center">
                        <label for="descricao" class="block mb-2 text-sm font-semibold text-primary dark:text-white">Descrição</label>
                        <textarea id="descricao" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escreva sobre você..."></textarea>
                      </div>

                      
                    
                      <div class="text-center sm:col-span-6 sm:text-left">
                        <button id="atualizar" name="atualizar-profissional" type="submit" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                      </div>
                  </div>
                </form>

            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>
  <div class="backdrop" onclick="Openbar()"></div>
  </main>

  <script>
    function Openbar() {
      document.querySelector('.sidebar').classList.toggle('right-[0px]');
      document.querySelector('.backdrop').classList.toggle('drawer-backdrop');
    }
  </script>
</html>