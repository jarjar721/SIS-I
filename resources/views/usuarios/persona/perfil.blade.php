@extends('layouts.gentemplate')
@section('Content')

<div class="page-title">
  <div class="title_left">
    <h3>Perfil del usuario</h3>
  </div>
</div>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Reporte del usuario <small>Reporte de actividad</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
          <div class="profile_img">
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img class="img-responsive avatar-view" src="{{asset('images/'.Auth::user()->image)}}" alt="Avatar" title="Change the avatar">
            </div>
          </div>
          <h3>{{ $persona->nombre }} {{ $persona->nombre2 }} {{ $persona->apellido }} {{ $persona->apellido2 }}</h3>

          <ul class="list-unstyled user_data">

            <li><i class="fa fa-user user-profile-icon"></i> V-{{ $persona->cedula }}
            </li>

            <li>
              <i class="fa fa-briefcase user-profile-icon"></i> {{ $persona->ocupacion }}
            </li>

            <li class="m-top-xs">
              <i class="fa fa-envelope user-profile-icon"></i>
              {{ Auth::user()->email }}
            </li>

            <li class="m-top-xs">
              <i class="fa fa-phone user-profile-icon"></i>
              {{ $persona->telefono }}
            </li>

          </ul>

        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">

          <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividad reciente</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Investigaciones</a>
              </li>
            
            </ul>
            <div id="myTabContent" class="tab-content">

              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                <!-- start recent activity -->
                <ul class="messages">
                  <li>
                    <img src="{{asset('images/'.Auth::user()->image)}}" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-info">24</h3>
                      <p class="month">May</p>
                    </div>
                    <div class="message_wrapper">
                      <h4 class="heading">Desmond Davison</h4>
                      <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                      <br />
                    </div>
                  </li>

                </ul>
                <!-- end recent activity -->

              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                <!-- start user projects -->
                <table class="data table table-striped no-margin">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Project Name</th>
                      <th>Client Company</th>
                      <th class="hidden-phone">Hours Spent</th>
                      <th>Contribution</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>New Company Takeover Review</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">18</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>New Partner Contracts Consultanci</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">13</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Partners and Inverstors report</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">30</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>New Company Takeover Review</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">28</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- end user projects -->

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection