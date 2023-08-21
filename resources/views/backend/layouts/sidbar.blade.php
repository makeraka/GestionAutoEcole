<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Auto-Ecole Debo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.png')}}" class="brand-image img-circle elevation-3" style="opacity: .8" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Rechercher ici" aria-label="Search">
          <div class="input-group-append" placeholder="Rechercher ici">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
                <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Tableau de Bord  
              </p>
            </a>
           
          </li>

          @if(auth()->user()->role =='Admin')

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                UTILISATEURS
          
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('alluser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les Utilisateurs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('AddUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Un Utilisateur</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                  DEPENSES
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllDepense')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toutes les Depenses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddDepense')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une Depense</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                APPRENANTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllApprenant')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Apprénants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddApprenant')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Apprénant</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                EXAMEN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllExamen')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Examen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddExamen')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Un Examen</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                MONITEURS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllMoniteur')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Moniteurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddMoniteur')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Moniteur</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                VEHICULES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllVehicule')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Vehicules</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddVehicule')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un Vehicule</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                PAYEMENTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllPayement')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Payements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddPayement')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Un Payement</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                COURS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllTheorie')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cours Théorique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AllPratique')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cours Pratique</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                TARIFS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllTarif')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Tarifs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddTarif')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Tarif</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- Debut Visibilité pour tous  *****************************************************************************************-->
          @endif



          @if(auth()->user()->role =='Employe')

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                APPRENANTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllApprenant')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Apprénants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddApprenant')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Apprénant</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                MONITEURS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllMoniteur')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Moniteurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddMoniteur')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Moniteur</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                VEHICULES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllVehicule')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Vehicules</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddVehicule')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un Vehicule</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                PAYEMENTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllPayement')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Payements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddPayement')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Un Payement</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                EXAMEN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllExamen')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Examen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddExamen')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Un Examen</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                COURS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllTheorie')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cours Théorique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AllPratique')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cours Pratique</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                TARIFS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllTarif')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous Les Tarifs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AddTarif')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Tarif</p>
                </a>
              </li>

            </ul>
          </li>
          @endif

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Epmploye du temps
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllPlaning')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Planing</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Paramètre
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AllParametre')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Infos</p>
                </a>
              </li>
             
            </ul>
          </li>
         

            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('DECONNEXION') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>