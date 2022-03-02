@extends('layouts.app2')

@section('content2')
        {{-- Type --}}
    <div class="ml-5">
        <div class="card border-0" style="padding-top:10px ; width:190px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        background-color: #f9f9f9; ">
            <h2 class="text-center">PREMIUM</h2>
        </div>
        {{-- Gambar --}}
        <div class="d-flex justify-content-between">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card border-0" style="border-radius: 20px; background-color: #f9f9f9; ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('JPG/kp.jpg')}}" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="col-md-6 mt-2">
                                <img src="{{asset('JPG/tp.jpg')}}" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="col-md-6 mt-2" style="padding: 0; padding-right: 15px">
                                <img src="{{asset('JPG/p.jpg')}}" width="100%" height="260px" style="border-radius: 20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex" style=" width: 800px;">
                {{-- Maps --}}
                <div class="card border-0" style="width: 450px; height: 70px; background-color: #f9f9f9; ">
                    <div class="card-body ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span class="ml-3">Metland Cileungsi, Kec.Cileungsi, Kab.Bogor</span>
                    </div>
                {{-- Available  --}}
                    <div class="card border-0 mt-5" style="width: 250px; height:55px; background-color: #f9f9f9; ">
                         <p class="mt-3 text-center">Available : Yes/No</p>
                    </div>
                {{-- Details  --}}
                    <div class="card border-0 mt-4" style="width: 250px; background-color: #f9f9f9; border-radius: 10px  ">
                        <div class="card-body">
                            <p class="mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                                <span class="ml-3">4x3 m</span>
                            </p>
                            <p class="mt-4"><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                                <span class="ml-3">General</span>
                            </p>
                            <p class="mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                                <span  class="ml-3">24 Hours Access</span>
                            </p>
                            <p class="mt-4 mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 3H6v18h4v-6h3c3.31 0 6-2.69 6-6s-2.69-6-6-6zm.2 8H10V7h3.2c1.1 0 2 .9 2 2s-.9 2-2 2z"/></svg>
                                <span class="ml-3">Parking Place</span>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Fasilitas --}}
                <div class="card border-0" style="border-radius: 10px; margin-top: 90px; margin-left: -180px; height: 200px; background-color: #f9f9f9; ">
                    <div class="card-body" style="width: 530px; padding: 35px">
                        {{--  Indoor Bathroom --}}
                        <svg class="" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><circle cx="8" cy="17" r="1"/><circle cx="12" cy="17" r="1"/><circle cx="16" cy="17" r="1"/><path d="M13,5.08V3h-2v2.08C7.61,5.57,5,8.47,5,12v2h14v-2C19,8.47,16.39,5.57,13,5.08z"/><circle cx="8" cy="20" r="1"/><circle cx="12" cy="20" r="1"/><circle cx="16" cy="20" r="1"/></g></svg>
                        <span>
                            Indoor Bathroom
                        </span>
                        {{-- Double Bed --}}
                        <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M20,12c0-1.1-0.9-2-2-2V7c0-1.1-0.9-2-2-2H8C6.9,5,6,5.9,6,7v3c-1.1,0-2,0.9-2,2v5h1.33L6,19h1l0.67-2h8.67L17,19h1l0.67-2 H20V12z M16,10h-3V7h3V10z M8,7h3v3H8V7z M6,12h12v3H6V12z"/></g></svg>
                        <span>
                            Single Bed
                        </span>
                        {{-- Wifi --}}
                        <svg  class="ml-5" xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                          <span>
                              Wifi
                         </span>
                        {{-- Squat Toilet --}}
                        <div class="mt-4">
                        <svg  xmlns="http://www.w3.org/2000/svg" height="40"   width="40" viewBox="0 0 27.32 32.34"><defs><style>.cls-1{fill:gray;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="FACILITIES"><path class="cls-1" d="M23.24,9.51h3.93c.06-.67.1-1.22.15-1.83l-3.53-.24c-1.09-.07-1.1-.09-1.43-1.13A9,9,0,0,0,11.31.37,8.74,8.74,0,0,0,5.15,6.5c-.19.61-.49.92-1.12.91-.33,0-.67,0-1,.06L0,7.71c.06.63.12,1.19.18,1.76l.46,0H4.19c.48,0,.88.13.88.69s-.39.66-.83.64H.3c0,.43.07.77.12,1.19H4.31c.43,0,.76.19.76.66s-.31.67-.76.67H.51c.06.45.1.8.16,1.21.3,0,.54,0,.79,0,1,0,1.92,0,2.88,0,.45,0,.79.25.7.69,0,.25-.42.48-.7.63s-.43,0-.66,0H.77c0,.45.06.79.09,1.21h.77c.89,0,1.79,0,2.68,0,.45,0,.74.21.74.67s-.33.66-.76.66c-.21,0-.4,0-.61,0H1c0,.45.06.79.09,1.21h.79c.82,0,1.65,0,2.47,0a.9.9,0,0,1,.66.57c.06.18-.24.51-.45.69S4.19,21,4,21c-.91,0-1.82,0-2.77,0,0,.42.09.77.13,1.19H4.11c.48,0,1,.06.94.66s-.45.69-.94.69c-.86,0-1.73,0-2.65,0,.09.89.21,1.71.22,2.52a1.55,1.55,0,0,0,.64,1.24c1.79,1.55,3.55,3.13,5.35,4.66a1.63,1.63,0,0,0,1,.39q5.14,0,10.25,0a1.67,1.67,0,0,0,1-.39c1.77-1.58,3.53-3.2,5.29-4.81.15-.13.34-.28.36-.46.13-1,.22-2.06.33-3.14-.91,0-1.71,0-2.52,0-.49,0-.94-.1-1-.69s.46-.67,1-.66c.86,0,1.73,0,2.62,0,0-.43.09-.77.13-1.19-1,0-1.88,0-2.79,0-.51,0-.94-.13-.92-.72s.45-.64.92-.64h2.89c0-.42.09-.77.13-1.19h-.7c-.8,0-1.59,0-2.4,0-.48,0-.83-.16-.85-.66s.37-.72.86-.7h3.22c0-.46,0-.8.06-1.21-1.15,0-2.22,0-3.28,0a1.11,1.11,0,0,1-.79-.43c-.28-.45.12-.88.77-.88,1.13,0,2.26,0,3.46,0V13.37c-1.21,0-2.4,0-3.58,0a1,1,0,0,1-.7-.6c-.1-.42.24-.69.69-.7s.94,0,1.4,0h2.4c0-.42.09-.74.13-1.19H23.23c-.48,0-.82-.18-.82-.67S22.78,9.5,23.24,9.51ZM21.8,19v7.17a3.46,3.46,0,0,1-3.71,3.72c-2.86,0-5.72,0-8.57,0A3.48,3.48,0,0,1,5.75,26.2V17.56c0-2.93,0-5.88,0-8.83a8,8,0,0,1,16,.42C21.83,12.43,21.8,15.74,21.8,19Z"/><path class="cls-1" d="M20.44,9.15a7.75,7.75,0,0,0-.57-2.79A6.66,6.66,0,0,0,7.11,8.89c0,1.24,0,2.46,0,3.69,0,1.64,0,3.29,0,4.93v8.7A2.14,2.14,0,0,0,9.43,28.6c2.89,0,5.8,0,8.69,0a2.12,2.12,0,0,0,2.34-2.32C20.47,20.57,20.48,14.86,20.44,9.15ZM13.65,27.33a3.84,3.84,0,1,1,3.89-3.86A3.85,3.85,0,0,1,13.65,27.33Z"/><path class="cls-1" d="M16.19,23.52A2.52,2.52,0,1,1,13.72,21,2.51,2.51,0,0,1,16.19,23.52Z"/></g></g></svg>
                        <span>
                            Squat Toilet
                        </span>
                        {{-- AC --}}
                        <svg style="margin-left: 60px" xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 28 28"><defs><style>.cls-1{fill:gray;}</style></defs><title>Asset 2</title><g id="Layer_2" data-name="Layer 2"><g id="FACILITIES"><path class="cls-1" d="M28,12.6H22.16L26.7,8.06l-2-2L18.2,12.6H15.4V9.8l6.52-6.52-2-2L15.4,5.84V0H12.6V5.84L8.06,1.3l-2,2L12.6,9.8v2.8H9.8L3.28,6.08l-2,2L5.84,12.6H0v2.8H5.84L1.3,19.94l2,2L9.8,15.4h2.8v2.8L6.08,24.72l2,2,4.54-4.54V28h2.8V22.16l4.54,4.54,2-2L15.4,18.2V15.4h2.8l6.52,6.52,2-2L22.16,15.4H28Z"/></g></g></svg>
                            <span class="mt-4">Air Conditioner</span>
                        {{-- Table --}}
                        <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M21.96,9.73l-1.43-5C20.41,4.3,20.02,4,19.57,4H4.43C3.98,4,3.59,4.3,3.47,4.73l-1.43,5C1.86,10.36,2.34,11,3,11h2.2L4,20 h2l0.67-5h10.67L18,20h2l-1.2-9H21C21.66,11,22.14,10.36,21.96,9.73z M6.93,13l0.27-2h9.6l0.27,2H6.93z"/></g></g></svg>
                        <span >Table</span>
                        </div>

                        {{-- Price --}}
                        <div class="card border-0" style=" border-radius: 10px; margin-top: 90px; margin-left: -35px; height: 200px; width: 550px; background-color: #f9f9f9; ">
                            <div style="margin-top: 30px; border-right: 2px solid; width:340px; padding-top: 50px; padding-bottom: 30" class="ml-4">
                                <h3>IDR 1.500.000,00 / month</h3>
                                <p class="text-muted text-right mr-2">"Not Include Electricity Costs"</p>
                            </div>
                            <div class="row justify-content-end " style="margin-top: -110px; margin-right: 66px">
                                <input type="text" id="picker" placeholder="Start Date"  class="text-left  btn btn-outline-secondary btn-sm"  style="padding-top: 10px; padding-bottom: 10px; width: 120px;">
                                <i class="fa-solid fa-caret-down" style="margin-left: -25px; margin-top: 13px"></i>
                            </div>
                            <div class="row justify-content-end mr-3" style="margin-top: 15px">
                                <a  href="{{route('booking')}}" class="btn btn-secondary" style="width: 155px; padding-top: 10px; padding-bottom: 10px;">Start Book</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
      </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    {{-- date --}}
    <script>
        flatpickr("#picker", {});
    </script>
@endsection
