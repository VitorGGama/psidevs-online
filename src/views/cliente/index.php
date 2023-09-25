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
  <title>Psidevs | Minha Conta</title>
</head>
<body class="bg-secondary">
  <header class="bg-primary text-right sticky top-0 z-10">
    <div class="container_header_desktop container py-3 flex justify-between items-center">
      <div class="header_logo">
        <h1><a href="index.php"><img src="../../../assets/logo-branca.svg" class="ps-2 sm:ps-0" alt="Logo Psidevs, Plataforma Online"></a></h1>
      </div>
      <div class="header_perfil hidden xl:flex">
        <div class="header_perfil_nome pe-5 text-neutral-100 font-ubuntu">
          <p>Josefa Ferreira</p>
          <p class="font-medium">Perfil</p>
        </div>
        <div class="header_perfil_avatar">
          <img src="../../../assets/cliente-avatar.svg" alt="Avatar cliente">
        </div>
      </div>
      <div class="container_header_mobile xl:hidden">
        <span class=" cursor-pointer" onclick="Openbar()">
          <img src="../../../assets/icone-menu.svg" class="pe-2 sm:pe-0" alt="menu">
        </span>
        <div class="sidebar fixed top-0 bottom-0 right-[-300px] duration-1000
      p-2 w-[300px] overflow-y-auto text-center bg-gray-50 shadow h-screen">
          <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center justify-between rounded-md ">
              <div class="container_header_mobile_avatar flex items-center text-lg font-medium text-neutral-700 pt-3">
                <img src="../../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
                <p class="">Minha conta</p>
              </div>
              <i class="bi bi-x cursor-pointer bg-gray-200 py-2 px-3 rounded-md text-primary text-2xl" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">
            <ul>
              <li class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-namehawkes-blue">
                <img src="../../../assets/icone-home.svg" alt="Casa">
                <span class="text-[15px] ml-4 text-primary">Home</span>
              </li>
              <li class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-namehawkes-blue">
                <img src="../../../assets/icone-calendario.svg" alt="Calendário">
                <span class="text-[15px] ml-4 text-primary">Minhas consultas</span>
              </li>
              <li class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-namehawkes-blue">
                <img src="../../../assets/icone-historico.svg" alt="Relógio">
                <span class="text-[15px] ml-4 text-primary">Histórico de consultas</span>
              </li>
              <li class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-namehawkes-blue">
                <img src="../../../assets/icone-perfil.svg" alt="Boneco">
                <span class="text-[15px] ml-4 text-primary">Meu perfil</span>
              </li>
              <hr class="my-4 text-gray-600">
              <li class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-namehawkes-blue">
                <img src="../../../assets/icone-notificacao-mobile.svg" alt="Sino">
                <span class="text-[15px] ml-4 text-primary">Notificações</span>
              </li>
              <li class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-namehawkes-blue">
                <img src="../../../assets/icone-sair.svg" alt="Porta">
                <span class="text-[15px] ml-4 text-primary">Sair</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </header>

  <main class="container">
    <div class="container_sub_header md:grid md:grid-cols-4 font-ubuntu pt-5">
      <div class="container_header flex flex-col-reverse md:justify-between md:col-span-3 md:col-start-2">
        <h2 class="text-neutral-700 text-2xl md:text-4xl">Boa tarde, Josefa Ferreira</h2>
        <div class="container_header_interacao w-72 flex justify-between items-center">
          <div class="container_header_interacao_notificacao bg-primary w-11 h-11 rounded-full inline-flex justify-center items-center relative before:content-[''] before:absolute before:bg-red-600 before:w-3 before:h-3 before:rounded-full before:top-1 before:right-0">
            <img src="../../../assets/icone-notificacao.svg" alt="Sino">
          </div>
          <div class="container_header_interacao_consulta bg-primary rounded-full inline-flex justify-center items-center h-11 px-5">
            <a href="#" class="inline-flex text-neutral-100"><img src="../../../assets/icone-plus.svg" class="pe-2" alt="Sinal de adição">Marcar consulta</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container_principal grid grid-cols-4">
      <div class="container_navbar col-span-1 font-ubuntu hidden">
        <div class="container_navbar_conteudo bg-gray-50 border border-solid border-pale-cornflower-blue p-5 w-11/12 rounded-2xl">
          <div class="container_navbar_conteudo_avatar flex items-center text-xl font-medium text-neutral-700 pt-3">
            <img src="../../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
            <p>Minha conta</p>
          </div>
          <nav class="text-primary text-lg font-medium mt-4">
            <ul>
              <li>
                <a href="#" class="flex items-center py-3 rounded-lg hover:bg-namehawkes-blue px-3"><img src="../../../assets/icone-home.svg" class="pe-3.5" alt="Casa">Início</a>
              </li>
              <li>
                <a href="#" class="flex items-center py-3 rounded-lg hover:bg-namehawkes-blue px-3"><img src="../../../assets/icone-calendario.svg" class="pe-3.5" alt="Calendário">Minhas consultas</a>
              </li>
              <li>
                <a href="#" class="flex items-center py-3 rounded-lg hover:bg-namehawkes-blue px-3"><img src="../../../assets/icone-historico.svg" class="pe-3.5" alt="Relógio">Histórico de consultas</a>
              </li>
              <li>
                <a href="#" class="flex items-center py-3 rounded-lg hover:bg-namehawkes-blue px-3"><img src="../../../assets/icone-perfil.svg" class="pe-3.5" alt="Boneco">Meu perfil</a>
              </li>
              <li>
                <a href="#" class="flex items-center py-3 hover:rounded-b-lg hover:bg-namehawkes-blue px-3 border-t border-gray-900/20"><img src="../../../assets/icone-sair.svg" class="pe-3.5" alt="Porta">Sair</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="container_conteudo col-span-3 bg-amber-200">
        <div class="container_conteudo_consulta_hoje">
          <div class="container_conteudo_consulta_hoje_titulo">
            <h2>Consulta de hoje</h2>
            <span>16:40</span>
          </div>
          <div class="container_conteudo_consulta_hoje_corpo">
            <h3>Jorge Nogueira</h3>
            <p>Psicólogo Educacional</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, magnam, maxime!
              Adipisci aut blanditiis corporis facilis illo quas saepe voluptatem.</p>
          </div>
          <div class="container_conteudo_consulta_hoje_rodape">
            <div class="container_conteudo_consulta_hoje_rodape_plataforma">
              <img src="../../../assets/icone-plataforma-zoom.svg" alt="Plataforma Zoom">
            </div>
            <div class="container_conteudo_consulta_hoje_rodape_conteudo">
              <div class="container_conteudo_consulta_hoje_rodape_texto">
                <h4>Entre na chamada</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi atque repudiandae vero?</p>
              </div>
              <div class="container_conteudo_consulta_hoje_rodape_conteudo_link">
                <a href="#">Conectar<img src="../../../assets/arrow-right.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container_conteudo_proxima_consulta">
          <div class="container_conteudo_proxima_consulta_titulo">
            <h2>Próxima consulta</h2>
          </div>
          <div class="container_conteudo_proxima_consulta_profissional">
            <div class="container_conteudo_proxima_consulta_grupo_1_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_texto">
              <h3>Fábia Araújo de Fraiz</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 20 Jul | Zoom</span>
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_horario">
              <span>14:30</span>
            </div>
          </div>
          <div class="container_conteudo_proxima_consulta_profissional">
            <div class="container_conteudo_proxima_consulta_grupo_1_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_texto">
              <h3>Juliana Souza Martins</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 21 Jul | Meet</span>
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_horario">
              <span>09:00</span>
            </div>
          </div>
          <div class="container_conteudo_proxima_consulta_rodape">
            <p>Ver todas consultas</p>
          </div>
        </div>
        <div class="container_conteudo_historico_consulta">
          <div class="container_conteudo_historico_consulta_titulo">
            <h2>Histórico de consultas</h2>
          </div>
          <div class="container_conteudo_historico_consulta_profissional">
            <div class="container_conteudo_historico_consulta_profissional_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar profissional">
            </div>
            <div class="container_conteudo_historico_consulta_profissional_texto">
              <h3>Eduardo Mateus Freitas</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 14/06/2023 | 13:30 | Zoom</span>
              <span>Cancelada</span>
            </div>
            <div class="container_conteudo_historico_consulta_profissional_botao">
              <span>R$ 50,00</span>
              <a href="#">Reagendar</a>
            </div>
          </div>
        </div>
        <div class="container_conteudo_historico_consulta">
          <div class="container_conteudo_historico_consulta_titulo">
            <h2>Histórico de consultas</h2>
          </div>
          <div class="container_conteudo_historico_consulta_profissional">
            <div class="container_conteudo_historico_consulta_profissional_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar profissional">
            </div>
            <div class="container_conteudo_historico_consulta_profissional_texto">
              <h3>Daniela Júlia Queiroz</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 11/06/2023 | 16:00 | Zoom</span>
              <span>Finalizada</span>
            </div>
            <div class="container_conteudo_historico_consulta_profissional_botao">
              <span>R$ 75,00</span>
              <a href="#">Reagendar</a>
            </div>
          </div>
        </div>
        <div class="container_conteudo_historico_consulta_rodape">
          <p>Ver histórico de consultas</p>
        </div>
      </div>
    </div>
  </main>

  <script>
    function Openbar() {
      document.querySelector('.sidebar').classList.toggle('right-[0px]')
    }
  </script>
</body>
</html>