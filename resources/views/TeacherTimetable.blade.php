<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/header-footer.css" />
    <link rel="stylesheet" href="css/dulaksha.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>MicroEye Educational Institute</title>


  <style>
      .sidebar-logo {
        width: 300px !important;
        height: 140px !important;
        margin-left: 1.2rem !important;
        margin-top: 1.2rem !important;
        margin-bottom: 1.2rem !important;
      }

      .fa-bars:before {
        margin-top: 0.3rem !important;
      }
    </style>
  


</head>
<body>



  
  
<br><br><br>

<center><h1 class="text-xl">Teacher Schedule</h1></center>



  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
    <div class="cd-schedule__timeline">
      <ul>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>13:00</span></li>
        <li><span>13:30</span></li>
        <li><span>14:00</span></li>
        <li><span>14:30</span></li>
        <li><span>15:00</span></li>
        <li><span>15:30</span></li>
        <li><span>16:00</span></li>
        <li><span>16:30</span></li>
        <li><span>17:00</span></li>
        <li><span>17:30</span></li>
        <li><span>18:00</span></li>
        <li><span>18:30</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->
  
    
    
    <div class="cd-schedule__events">
      <ul>
        <li class="cd-schedule__group"> 
          <div class="cd-schedule__top-info"><span>Monday</span></div>
         
          <ul>
       

          
        
            <li class="cd-schedule__event">
              <a data-start="{{}}" data-end="{{}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}} </em>
              </a>
            </li>
       
          </ul>
        </li>


        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>
         
          <ul>
          @foreach ($schedules as $shedule)
          @if(($shedule->start_date) == 'Tuesday')
            <li class="cd-schedule__event">
              <a data-start="{{$shedule->start_time}}" data-end="{{$shedule->end_time}}" data-content="event-abs-circuit" data-event="event-2" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}}</em>
              </a>
            </li>
            @endif
          @endforeach
          </ul>
        </li>

        
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Wednesday</span></div>
         
          <ul>
          @foreach ($schedules as $shedule)
          @if(($shedule->start_date) == 'Wednesday')
            <li class="cd-schedule__event">
              <a data-start="{{$shedule->start_time}}" data-end="{{$shedule->end_time}}" data-content="event-abs-circuit" data-event="event-3" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}}</em>
              </a>
            </li>
            @endif
          @endforeach
          </ul>
        </li>


        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Thursday</span></div>
         
          <ul>
          @foreach ($schedules as $shedule)
          @if(($shedule->start_date) == 'Thursday')
            <li class="cd-schedule__event">
              <a data-start="{{$shedule->start_time}}" data-end="{{$shedule->end_time}}" data-content="event-abs-circuit" data-event="event-4" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}}</em>
              </a>
            </li>
            @endif
          @endforeach
          </ul>
        </li>

        
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Friday</span></div>
         
          <ul>
          @foreach ($schedules as $shedule)
          @if(($shedule->start_date) == 'Friday')
            <li class="cd-schedule__event">
              <a data-start="{{$shedule->start_time}}" data-end="{{$shedule->end_time}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}}</em>
              </a>
            </li>
            @endif
          @endforeach
          </ul>
        </li>


        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Saturday</span></div>
         
          <ul>
          @foreach ($schedules as $shedule)
          @if(($shedule->start_date) == 'Saturday')
            <li class="cd-schedule__event">
              <a data-start="{{$shedule->start_time}}" data-end="{{$shedule->end_time}}" data-content="event-abs-circuit" data-event="event-2" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}}</em>
              </a>
            </li>
            @endif
          @endforeach
          </ul>
        </li>


        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Sunday</span></div>
         
          <ul>
          @foreach ($schedules as $shedule)
          @if(($shedule->start_date) == 'Sunday')
            <li class="cd-schedule__event">
              <a data-start="{{$shedule->start_time}}" data-end="{{$shedule->end_time}}" data-content="event-abs-circuit" data-event="event-3" href="#0">
                <em class="cd-schedule__name">{{$shedule->topic}} <br> {{$shedule->subject}} <br> {{$shedule->grade}} <br> {{$shedule->link}}</em>
              </a>
            </li>
            @endif
          @endforeach
          </ul>
        </li>
      </ul>
    </div> 

    
   
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

<br><br>

  
  
    
  
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <script src="/assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
      <script src="/assets/js/main.js"></script>
   
    </body>
  </html>