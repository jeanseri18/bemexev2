@extends('layouts.app')

@section('title', 'Formation par catalogue | Bem executive school')

<style>
.card-custom {
    min-height: 300px;
    /* Ajustez cette valeur selon vos besoins */

    flex-direction: column;
    justify-content: space-between;
}



.my-slider .card-img-top {
    width: 100%;
    height: 200px; /* Hauteur fixe pour toutes les images */
    object-fit: cover; /* Couvrir le conteneur sans déformation */
}

.card {
    overflow: hidden; /* Éviter que les images débordent du conteneur */
}

.item {
    display: flex;
    justify-content: center; /* Centrer les éléments horizontalement */
    align-items: center; /* Centrer les éléments verticalement */
}

.card-img-top {
    width: 100%;
    height: 200px; /* Hauteur fixe pour toutes les images */
    object-fit: cover; /* Couvrir le conteneur sans déformation */
}


</style>
@section('content')
<section class="py-lg-8 py-6 bg-primary">
                <div class="container my-lg-8">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="mb-5 mb-lg-0">
                                        <h2 class="display-4 fw-bold mb-3 text-white">
                                        Formation par
                                            <u class="text-warning"><span class="text-white">catalogue</span></u>
                                        </h2>
                                        <p class="mb-5 lead text-white">
                                            
                                        Des programmes prêts à l’emploi, axés sur les compétences essentielles pour améliorer la performance et renforcer le leadership au sein de votre organisation.                                    </p>
                                        <a href="#!" class="btn btn-outline-white text-white">Commencez</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                                    <div class="d-flex justify-content-center align-items-center position-relative rounded border-gray-100 border border-4 rounded-3 bg-cover" style="background-image: url(../../assets/images/formationorg/form.jpg); height: 300px">
                                        <a class="glightbox icon-shape rounded-circle btn-play icon-xl" href="#">
                                            <i class="fe fe-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<section class="pb-lg-8 " >
    <div >
        

    <!-- container -->
    <div class="bg-white " style=" padding-left:60px /* 4px */;
    padding-right:60px;">
        <div class="row">
            <!-- col -->
            <div class=" col-xl-12 col-md-12 col-12">
                <div class="row text-center">
                    <div class="col-md-12 px-lg-8 mb-8 mt-6">
                        <!-- text -->
                        <!-- heading -->
                        <h2 class="h1 fw-bold mt-3" style="">Nos parcours de formation</h2>
                        <!-- text -->
                        <p class="mb-0 fs-4" style="">Nos formations catalogue offrent une gamme de programmes standards, conçus par des experts du domaine pour répondre aux besoins communs des entreprises en matière de développement des compétences.</p>
                    </div>
                </div>
                <div class="row gy-4">
    <!-- Card 1: MANAGEMENT & STRATÉGIE -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom ">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/leadership.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">MANAGEMENT & STRATÉGIE</h2>
                            <p class="mb-0">L’expertise de Bem executif dans l'enseignement et la recherche en Management et Stratégie est reconnue mondialement.</p>
                            <br></div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 2: LEADERSHIP -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/conferencier.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">LEADERSHIP</h2><br>
                          
                           
                            <p class="mb-0">Chaque professionnel connaît dans son parcours des moments clés qui nécessitent de développer son leadership.</p>
                            <br>    <br> </div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 3: COACHING -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/image.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">COACHING</h2><br>
                            <p class="mb-0">Notre conviction est que chacun porte en lui ses propres réponses, les plus efficientes possible, pour résoudre sa problématique.</p>
                            <br>
                        </div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 4: FINANCE -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/aimant.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">FINANCE</h2><br>
                            <p class="mb-0">Après la crise financière, on ne peut plus douter de la nécessité de doter les organisations et managers d’une expertise en finance d’entreprise.</p>
                      <br>  </div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 5: MARKETING, DATA & BUSINESS DEVELOPMENT -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/social.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">MARKETING, DATA & BUSINESS DEVELOPMENT</h2>
                        <p class="mb-0">Le Marketing, la data et le Développement Commercial sont des facteurs essentiels du processus de création de valeur des entreprises.</p>
                        <br>   </div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 6: ENTREPRENEURIAT & INNOVATION -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/entrepreneuriat.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">ENTREPRENEURIAT & INNOVATION</h2>
                            <p class="mb-0">Bem executif est engagée dans l’entrepreneuriat, l'innovation tant au niveau de la formation qu’à celui de la recherche.</p>
                        </div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 7: DÉVELOPPEMENT DURABLE -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                        <img src="../../assets/images/competence/entrepreneuriat.png" width="30px" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">DÉVELOPPEMENT DURABLE</h2>
                            <p class="mb-0">Les entreprises doivent jouer un rôle clé dans la construction d'un avenir plus durable, et nos programmes sont conçus pour aider les leaders à prendre des décisions éclairées en la matière.</p>
                        </div>
                    </div>
                 
                </center>
            </div>
        </div>
    </div>

    <!-- Card 8: EXCELLENCE OPÉRATIONNELLE -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                    <img src="../../assets/images/competence/conferencier.png" width="30px">                  </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">EXCELLENCE OPÉRATIONNELLE</h2>
                            <p class="mb-0">L'excellence opérationnelle est essentielle pour améliorer la performance, la qualité et la rentabilité des organisations.</p>
                       <br> </div>
                    </div>
                  
                </center>
            </div>
        </div>
    </div>

    <!-- Card 9: GESTION DE PROJET -->
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
            <div class="card-body">
                <center>
                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                    <img src="../../assets/images/competence/aimant.png" width="30px">                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0">GESTION DE PROJET</h2><br>
                            <p class="mb-0">La gestion de projet est un atout clé pour piloter efficacement des initiatives complexes et multidimensionnelles.</p>
                        <br></div>
                    </div>
                  
                </center>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div><br>
    </div>
<br>
        <div class="row container  " style=" padding-left:60px /* 4px */;
    padding-right:60px;">
            <div class="col-12">
                <div class="mb-5 mb-lg-8">
                    <span class="fw-semibold text-primary">Notre Méthodologie</span>
                    <h2 class="h1 mt-3 mb-0">Une méthodologie professionnelle au service de vos collaborateurs en 4 étapes</h2>
                    <p class="mb-0">Découvrez notre approche structurée pour offrir des formations sur mesure à vos équipes.</p>
                </div>
            </div>                <br>

        </div>
        <div class="row  gy-lg-0" style=" padding-left:60px /* 4px */;
    padding-right:60px;">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="mb-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="80" height="80" rx="40" fill="#FFEFF4FF"></rect>
                      <path opacity="0.2" d="M58 52C58 53.1935 57.5259 54.3381 56.682 55.182C55.8381 56.0259 54.6935 56.5 53.5 56.5H32.5C33.6935 56.5 34.8381 56.0259 35.682 55.182C36.5259 54.3381 37 53.1935 37 52C37 50.125 35.5 49 35.5 49H56.5C56.5 49 58 50.125 58 52Z" fill="#FE4F7BFF"></path>
                      <path d="M34 35.5C34 35.1022 34.158 34.7206 34.4393 34.4393C34.7206 34.158 35.1022 34 35.5 34H47.5C47.8978 34 48.2794 34.158 48.5607 34.4393C48.842 34.7206 49 35.1022 49 35.5C49 35.8978 48.842 36.2794 48.5607 36.5607C48.2794 36.842 47.8978 37 47.5 37H35.5C35.1022 37 34.7206 36.842 34.4393 36.5607C34.158 36.2794 34 35.8978 34 35.5ZM35.5 43H47.5C47.8978 43 48.2794 42.842 48.5607 42.5607C48.842 42.2794 49 41.8978 49 41.5C49 41.1022 48.842 40.7206 48.5607 40.4393C48.2794 40.158 47.8978 40 47.5 40H35.5C35.1022 40 34.7206 40.158 34.4393 40.4393C34.158 40.7206 34 41.1022 34 41.5C34 41.8978 34.158 42.2794 34.4393 42.5607C34.7206 42.842 35.1022 43 35.5 43ZM59.5 52C59.5 53.5913 58.8679 55.1174 57.7426 56.2426C56.6174 57.3679 55.0913 58 53.5 58H32.5C30.9087 58 29.3826 57.3679 28.2574 56.2426C27.1321 55.1174 26.5 53.5913 26.5 52V28C26.5 27.2044 26.1839 26.4413 25.6213 25.8787C25.0587 25.3161 24.2956 25 23.5 25C22.7044 25 21.9413 25.3161 21.3787 25.8787C20.8161 26.4413 20.5 27.2044 20.5 28C20.5 29.0763 21.4056 29.8038 21.415 29.8113C21.6633 30.0023 21.8455 30.2663 21.9361 30.5661C22.0267 30.866 22.0211 31.1867 21.9202 31.4832C21.8193 31.7798 21.6281 32.0373 21.3734 32.2197C21.1187 32.402 20.8133 32.5 20.5 32.5C20.1756 32.5006 19.8601 32.3945 19.6019 32.1981C19.3844 32.0387 17.5 30.5519 17.5 28C17.5 26.4087 18.1321 24.8826 19.2574 23.7574C20.3826 22.6321 21.9087 22 23.5 22H49C50.5913 22 52.1174 22.6321 53.2426 23.7574C54.3679 24.8826 55 26.4087 55 28V47.5H56.5C56.8246 47.5 57.1404 47.6053 57.4 47.8C57.625 47.9613 59.5 49.4481 59.5 52ZM34.0487 48.5275C34.1512 48.225 34.3468 47.9626 34.6075 47.7781C34.8682 47.5935 35.1806 47.4962 35.5 47.5H52V28C52 27.2044 51.6839 26.4413 51.1213 25.8787C50.5587 25.3161 49.7957 25 49 25H28.6919C29.2224 25.9107 29.5013 26.946 29.5 28V52C29.5 52.7956 29.8161 53.5587 30.3787 54.1213C30.9413 54.6839 31.7044 55 32.5 55C33.2956 55 34.0587 54.6839 34.6213 54.1213C35.1839 53.5587 35.5 52.7956 35.5 52C35.5 50.9237 34.5944 50.1962 34.585 50.1887C34.3294 50.0059 34.1393 49.7457 34.0427 49.4466C33.9462 49.1475 33.9483 48.8253 34.0487 48.5275ZM56.5 52C56.4812 51.4442 56.2668 50.913 55.8944 50.5H38.2694C38.4201 50.9857 38.4966 51.4914 38.4963 52C38.4977 53.0535 38.2202 54.0886 37.6919 55H53.5C54.2957 55 55.0587 54.6839 55.6213 54.1213C56.1839 53.5587 56.5 52.7956 56.5 52Z" fill="#FE4F7BFF"></path>
                    </svg>
            </div>
                        <div class="mb-6">
                            <h3>1- Clarification du besoin et définition des objectifs</h3>
                            <p class="mb-4">Une rencontre avec le DRH ou Responsable de la formation permet de comprendre précisément la problématique de l’entreprise via des interviews/entretiens.</p>
                        </div>
                    </div>
                </div>                <br>

            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="mb-6">
              <!-- SVG pour l'étape 2 -->
              <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="80" height="80" rx="40" fill="#FFEEDA"></rect>
                      <path opacity="0.2" d="M55 22V52H29.5C28.3065 52 27.1619 52.4741 26.318 53.318C25.4741 54.1619 25 55.3065 25 56.5V26.5C25 25.3065 25.4741 24.1619 26.318 23.318C27.1619 22.4741 28.3065 22 29.5 22H37V40L43 35.5L49 40V22H55Z" fill="#C28135"></path>
                      <path d="M55 20.5H29.5C27.9087 20.5 26.3826 21.1321 25.2574 22.2574C24.1321 23.3826 23.5 24.9087 23.5 26.5V58C23.5 58.3978 23.658 58.7794 23.9393 59.0607C24.2206 59.342 24.6022 59.5 25 59.5H52C52.3978 59.5 52.7794 59.342 53.0607 59.0607C53.342 58.7794 53.5 58.3978 53.5 58C53.5 57.6022 53.342 57.2206 53.0607 56.9393C52.7794 56.658 52.3978 56.5 52 56.5H26.5C26.5 55.7043 26.8161 54.9413 27.3787 54.3787C27.9413 53.8161 28.7044 53.5 29.5 53.5H55C55.3978 53.5 55.7794 53.342 56.0607 53.0607C56.342 52.7794 56.5 52.3978 56.5 52V22C56.5 21.6022 56.342 21.2206 56.0607 20.9393C55.7794 20.658 55.3978 20.5 55 20.5ZM38.5 23.5H47.5V37L43.8981 34.3C43.6385 34.1053 43.3227 34 42.9981 34C42.6736 34 42.3578 34.1053 42.0981 34.3L38.5 37V23.5ZM53.5 50.5H29.5C28.4465 50.4986 27.4114 50.7761 26.5 51.3044V26.5C26.5 25.7044 26.8161 24.9413 27.3787 24.3787C27.9413 23.8161 28.7044 23.5 29.5 23.5H35.5V40C35.5 40.2786 35.5776 40.5516 35.724 40.7886C35.8705 41.0256 36.08 41.2171 36.3292 41.3416C36.5783 41.4662 36.8573 41.519 37.1347 41.4939C37.4122 41.4689 37.6771 41.3671 37.9 41.2L43 37.375L48.1019 41.2C48.361 41.3943 48.6761 41.4996 49 41.5C49.2329 41.4997 49.4625 41.4458 49.6712 41.3425C49.9205 41.2178 50.13 41.0261 50.2764 40.789C50.4228 40.5519 50.5002 40.2787 50.5 40V23.5H53.5V50.5Z" fill="#C28135"></path>
                    </svg>
            </div>
                        <div class="mb-6">
                            <h3>2- Design du module/séminaire</h3>
                            <p class="mb-4">Nos équipes conçoivent un module sur mesure en collaboration avec le DRH, en validant chaque étape pour répondre aux objectifs définis.</p>
                        </div>
                    </div>
                </div>                <br>

            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="mb-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="80" height="80" rx="40" fill="#E1F6FF"></rect>
                      <path opacity="0.2" d="M56.5 37.2007V47.1794C56.5008 47.546 56.3675 47.9002 56.125 48.1751C54.0063 50.5357 48.8313 55.0001 40 55.0001C31.1688 55.0001 25.9975 50.5357 23.875 48.1751C23.6326 47.9002 23.4992 47.546 23.5 47.1794V37.2007L40 46.0001L56.5 37.2007Z" fill="#51A0C2"></path>
                      <path d="M63.205 32.6765L40.705 20.6765C40.488 20.5609 40.2459 20.5005 40 20.5005C39.7541 20.5005 39.512 20.5609 39.295 20.6765L16.795 32.6765C16.555 32.8044 16.3543 32.9951 16.2144 33.2283C16.0744 33.4615 16.0005 33.7283 16.0005 34.0002C16.0005 34.2722 16.0744 34.539 16.2144 34.7722C16.3543 35.0054 16.555 35.1961 16.795 35.324L22 38.1009V47.1796C21.9985 47.9164 22.2696 48.6277 22.7613 49.1765C25.2175 51.9121 30.7206 56.5002 40 56.5002C43.0768 56.5257 46.1306 55.9684 49 54.8577V61.0002C49 61.3981 49.1581 61.7796 49.4394 62.0609C49.7207 62.3422 50.1022 62.5002 50.5 62.5002C50.8978 62.5002 51.2794 62.3422 51.5607 62.0609C51.842 61.7796 52 61.3981 52 61.0002V53.4084C53.956 52.2792 55.7236 50.8514 57.2388 49.1765C57.7304 48.6277 58.0016 47.9164 58 47.1796V38.1009L63.205 35.324C63.445 35.1961 63.6457 35.0054 63.7857 34.7722C63.9256 34.539 63.9995 34.2722 63.9995 34.0002C63.9995 33.7283 63.9256 33.4615 63.7857 33.2283C63.6457 32.9951 63.445 32.8044 63.205 32.6765ZM40 53.5002C31.8869 53.5002 27.115 49.5365 25 47.1796V39.7002L39.295 47.324C39.512 47.4395 39.7541 47.5 40 47.5C40.2459 47.5 40.488 47.4395 40.705 47.324L49 42.9009V51.5896C46.6375 52.6921 43.66 53.5002 40 53.5002ZM55 47.1721C54.1009 48.1699 53.0948 49.0659 52 49.844V41.2996L55 39.7002V47.1721ZM51.25 38.3015L51.2088 38.2771L40.7088 32.6765C40.3584 32.4976 39.9519 32.4634 39.5766 32.5814C39.2013 32.6993 38.8874 32.96 38.7025 33.3072C38.5176 33.6544 38.4765 34.0604 38.588 34.4376C38.6995 34.8148 38.9548 35.1332 39.2988 35.324L48.0625 40.0002L40 44.2996L20.6875 34.0002L40 23.7009L59.3125 34.0002L51.25 38.3015Z" fill="#51A0C2"></path>
                    </svg>
            </div>
                        <div class="mb-6">
                            <h3>3- Formation</h3>
                            <p class="mb-4">Nous animons la formation dans l’entreprise ou à un endroit défini, en suivant le programme et en impliquant l’ensemble des collaborateurs inscrits.</p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="mb-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="80" height="80" rx="40" fill="#F2EFFF"></rect>
                      <path opacity="0.2" d="M58 52C58 53.1935 57.5259 54.3381 56.682 55.182C55.8381 56.0259 54.6935 56.5 53.5 56.5H32.5C33.6935 56.5 34.8381 56.0259 35.682 55.182C36.5259 54.3381 37 53.1935 37 52C37 50.125 35.5 49 35.5 49H56.5C56.5 49 58 50.125 58 52Z" fill="#754FFE"></path>
                      <path d="M34 35.5C34 35.1022 34.158 34.7206 34.4393 34.4393C34.7206 34.158 35.1022 34 35.5 34H47.5C47.8978 34 48.2794 34.158 48.5607 34.4393C48.842 34.7206 49 35.1022 49 35.5C49 35.8978 48.842 36.2794 48.5607 36.5607C48.2794 36.842 47.8978 37 47.5 37H35.5C35.1022 37 34.7206 36.842 34.4393 36.5607C34.158 36.2794 34 35.8978 34 35.5ZM35.5 43H47.5C47.8978 43 48.2794 42.842 48.5607 42.5607C48.842 42.2794 49 41.8978 49 41.5C49 41.1022 48.842 40.7206 48.5607 40.4393C48.2794 40.158 47.8978 40 47.5 40H35.5C35.1022 40 34.7206 40.158 34.4393 40.4393C34.158 40.7206 34 41.1022 34 41.5C34 41.8978 34.158 42.2794 34.4393 42.5607C34.7206 42.842 35.1022 43 35.5 43ZM59.5 52C59.5 53.5913 58.8679 55.1174 57.7426 56.2426C56.6174 57.3679 55.0913 58 53.5 58H32.5C30.9087 58 29.3826 57.3679 28.2574 56.2426C27.1321 55.1174 26.5 53.5913 26.5 52V28C26.5 27.2044 26.1839 26.4413 25.6213 25.8787C25.0587 25.3161 24.2956 25 23.5 25C22.7044 25 21.9413 25.3161 21.3787 25.8787C20.8161 26.4413 20.5 27.2044 20.5 28C20.5 29.0763 21.4056 29.8038 21.415 29.8113C21.6633 30.0023 21.8455 30.2663 21.9361 30.5661C22.0267 30.866 22.0211 31.1867 21.9202 31.4832C21.8193 31.7798 21.6281 32.0373 21.3734 32.2197C21.1187 32.402 20.8133 32.5 20.5 32.5C20.1756 32.5006 19.8601 32.3945 19.6019 32.1981C19.3844 32.0387 17.5 30.5519 17.5 28C17.5 26.4087 18.1321 24.8826 19.2574 23.7574C20.3826 22.6321 21.9087 22 23.5 22H49C50.5913 22 52.1174 22.6321 53.2426 23.7574C54.3679 24.8826 55 26.4087 55 28V47.5H56.5C56.8246 47.5 57.1404 47.6053 57.4 47.8C57.625 47.9613 59.5 49.4481 59.5 52ZM34.0487 48.5275C34.1512 48.225 34.3468 47.9626 34.6075 47.7781C34.8682 47.5935 35.1806 47.4962 35.5 47.5H52V28C52 27.2044 51.6839 26.4413 51.1213 25.8787C50.5587 25.3161 49.7957 25 49 25H28.6919C29.2224 25.9107 29.5013 26.946 29.5 28V52C29.5 52.7956 29.8161 53.5587 30.3787 54.1213C30.9413 54.6839 31.7044 55 32.5 55C33.2956 55 34.0587 54.6839 34.6213 54.1213C35.1839 53.5587 35.5 52.7956 35.5 52C35.5 50.9237 34.5944 50.1962 34.585 50.1887C34.3294 50.0059 34.1393 49.7457 34.0427 49.4466C33.9462 49.1475 33.9483 48.8253 34.0487 48.5275ZM56.5 52C56.4812 51.4442 56.2668 50.913 55.8944 50.5H38.2694C38.4201 50.9857 38.4966 51.4914 38.4963 52C38.4977 53.0535 38.2202 54.0886 37.6919 55H53.5C54.2957 55 55.0587 54.6839 55.6213 54.1213C56.1839 53.5587 56.5 52.7956 56.5 52Z" fill="#754FFE"></path>
                    </svg>
            </div>
                        <div class="mb-6">
                            <h3>4- Analyse des résultats & suivi</h3>
                            <p class="mb-4">Nous évaluons les acquis à la fin du séminaire et mettons en place un suivi pour mesurer la mise en application des compétences et identifier les axes d’amélioration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  

</section>

        @include('layouts.contact')


@endsection

