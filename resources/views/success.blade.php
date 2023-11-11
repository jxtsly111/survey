<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <style>
    html,
    body {
      font-size: 24px;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      background-color: #99999988;

    }

    .main-container {
      width: 100%;
    /* height: 100vh; */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    }
    .sub-container{
    width: 1000px;
    height: 110vh;
    background: #fff;
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: column;
    }
    .sub-sub{
      text-align: center;
      padding: 10px;
      margin-left: 30px;
    margin-right: 30px;
    }
    .image {
      margin-bottom: 10px;
    }

    .check-container {
      width: 6.25rem;
      height: 7.5rem;
      display: flex;
      flex-flow: column;
      align-items: center;
      justify-content: space-between;
    }
    .check-container .check-background {
      width: 100%;
      height: calc(100% - 1.25rem);
      background: linear-gradient(to bottom right, #005aaa, #005aaa);
      box-shadow: 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
      transform: scale(0.84);
      border-radius: 50%;
      animation: animateContainer 0.75s ease-out forwards 0.75s;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
    }
    .check-container .check-background svg {
      width: 65%;
      transform: translateY(0.25rem);
      stroke-dasharray: 80;
      stroke-dashoffset: 80;
      animation: animateCheck 0.35s forwards 1.25s ease-out;
    }
    .check-container .check-shadow {
      bottom: calc(-15% - 5px);
      left: 0;
      border-radius: 50%;
      background: radial-gradient(closest-side, #005aaa, transparent);
      animation: animateShadow 0.75s ease-out forwards 0.75s;
    }

    @keyframes animateContainer {
      0% {
        opacity: 0;
        transform: scale(0);
        box-shadow: 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
      }
      25% {
        opacity: 1;
        transform: scale(0.9);
        box-shadow: 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
      }
      43.75% {
        transform: scale(1.15);
        box-shadow: 0px 0px 0px 43.334px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
      }
      62.5% {
        transform: scale(1);
        box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 21.667px rgba(255, 255, 255, 0.25) inset;
      }
      81.25% {
        box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset;
      }
      100% {
        opacity: 1;
        box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset, 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset;
      }
    }
    @keyframes animateCheck {
      from {
        stroke-dashoffset: 80;
      }
      to {
        stroke-dashoffset: 0;
      }
    }
    @keyframes animateShadow {
      0% {
        opacity: 0;
        width: 100%;
        height: 15%;
      }
      25% {
        opacity: 0.25;
      }
      43.75% {
        width: 40%;
        height: 7%;
        opacity: 0.35;
      }
      100% {
        width: 85%;
        height: 15%;
        opacity: 0.25;
      }
    }

    .submitted-text {
      font-size: 24px;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-weight: 700;
      color: #404F5E;
      margin-top: 10px;
    }

    .go-back-button {
      font-size: 18px;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-weight: 700;
      color: #fff;
      background-color: #005aaa;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px; /* Adjust this value as needed */
    }

    .go-back-button:hover {
      background-color: #005aaa;
    }

    @media only screen and (max-width: 600px) {
  .main-container {
    display: flex;
    flex-wrap: wrap;
  }
}
/*     
    @media (min-width: 480px) {
     .sub-container .sub-sub .submitted-text {
      font-size: 50px ;
     }
    } */

  
  </style>
</head>
<body>
  <div class="main-container">

    <div class="sub-container">

      <div class="sub-sub">
      <div class="image" style="margin-bottom: 10px">
        <img src="{{asset('frontend/images/afrea.png')}}" alt="">
      </div>
      </div>

      <div class="sub-sub">
      <div class="check-container">
        <div class="check-background">
          <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="check-shadow"></div>
      </div>
      </div>

      <div class="sub-sub">
        <div class="submitted-text"> You're all done </div>
        <div class="submitted-text">Thank you for taking the time to submit your AGENDA 700 Survey  Form today</div>
        <div class="submitted-text">Enjoy the rest of your day</div>
        <a href="{{ route('registration.display') }}" class="go-back-button">Display All Data</a>
        <a href="{{ route('home') }}" class="go-back-button">HomePage</a>
     </div>

    </div>

  </div>
 
</body>
</html>
