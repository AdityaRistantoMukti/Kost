@extends('layouts.app2')

@section('content2')
        {{-- Type --}}
    <div class="ml-5">
        <div class="card border-0" style="padding-top:10px ; width:190px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        background-color: #f9f9f9; ">
            <h2 class="text-center">REGULAR</h2>
        </div>
        {{-- Gambar --}}
        <div class="d-flex justify-content-between">
        <div class="row mt-5">

            <div class="col-md-4">
                <div class="card border-0" style="border-radius: 20px; background-color: #f9f9f9; ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('JPG/kr.jpg')}}" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="col-md-6 mt-2">
                                <img src="{{asset('JPG/tr.jpg')}}" width="100%" style="border-radius: 20px">
                            </div>
                            <div class="col-md-6 mt-2" style="padding: 0; padding-right: 15px">
                                <img src="{{asset('JPG/p.jpg')}}" width="100%" height="230px" style="border-radius: 20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex" style=" width: 800px">
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
                    <div class="card border-0 mt-4" style="width: 250px; background-color: #f9f9f9; border-radius: 10px; ">
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
                <div class="card border-0" style="border-radius: 10px; margin-top: 90px; margin-left: -170px; height: 200px; background-color: #f9f9f9; ">
                    <div class="card-body" style="width: 500px; padding: 35px">
                        {{--  Indoor Bathroom --}}
                        <svg class="" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><circle cx="8" cy="17" r="1"/><circle cx="12" cy="17" r="1"/><circle cx="16" cy="17" r="1"/><path d="M13,5.08V3h-2v2.08C7.61,5.57,5,8.47,5,12v2h14v-2C19,8.47,16.39,5.57,13,5.08z"/><circle cx="8" cy="20" r="1"/><circle cx="12" cy="20" r="1"/><circle cx="16" cy="20" r="1"/></g></svg>
                        <span>
                            Indoor Bathroom
                        </span>
                        {{-- Single Bed --}}
                        <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M20,12c0-1.1-0.9-2-2-2V7c0-1.1-0.9-2-2-2H8C6.9,5,6,5.9,6,7v3c-1.1,0-2,0.9-2,2v5h1.33L6,19h1l0.67-2h8.67L17,19h1l0.67-2 H20V12z M16,10h-3V7h3V10z M8,7h3v3H8V7z M6,12h12v3H6V12z"/></g></svg>
                        <span>
                            Single Bed
                        </span>
                        {{-- Wifi --}}
                        <svg  class="ml-3" xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                          <span>
                              Wifi
                         </span>
                        {{-- Squat Toilet --}}
                        <div class="mt-4">
                        <svg  xmlns="http://www.w3.org/2000/svg" height="40"   width="40" viewBox="0 0 27.32 32.34"><defs><style>.cls-1{fill:gray;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="FACILITIES"><path class="cls-1" d="M23.24,9.51h3.93c.06-.67.1-1.22.15-1.83l-3.53-.24c-1.09-.07-1.1-.09-1.43-1.13A9,9,0,0,0,11.31.37,8.74,8.74,0,0,0,5.15,6.5c-.19.61-.49.92-1.12.91-.33,0-.67,0-1,.06L0,7.71c.06.63.12,1.19.18,1.76l.46,0H4.19c.48,0,.88.13.88.69s-.39.66-.83.64H.3c0,.43.07.77.12,1.19H4.31c.43,0,.76.19.76.66s-.31.67-.76.67H.51c.06.45.1.8.16,1.21.3,0,.54,0,.79,0,1,0,1.92,0,2.88,0,.45,0,.79.25.7.69,0,.25-.42.48-.7.63s-.43,0-.66,0H.77c0,.45.06.79.09,1.21h.77c.89,0,1.79,0,2.68,0,.45,0,.74.21.74.67s-.33.66-.76.66c-.21,0-.4,0-.61,0H1c0,.45.06.79.09,1.21h.79c.82,0,1.65,0,2.47,0a.9.9,0,0,1,.66.57c.06.18-.24.51-.45.69S4.19,21,4,21c-.91,0-1.82,0-2.77,0,0,.42.09.77.13,1.19H4.11c.48,0,1,.06.94.66s-.45.69-.94.69c-.86,0-1.73,0-2.65,0,.09.89.21,1.71.22,2.52a1.55,1.55,0,0,0,.64,1.24c1.79,1.55,3.55,3.13,5.35,4.66a1.63,1.63,0,0,0,1,.39q5.14,0,10.25,0a1.67,1.67,0,0,0,1-.39c1.77-1.58,3.53-3.2,5.29-4.81.15-.13.34-.28.36-.46.13-1,.22-2.06.33-3.14-.91,0-1.71,0-2.52,0-.49,0-.94-.1-1-.69s.46-.67,1-.66c.86,0,1.73,0,2.62,0,0-.43.09-.77.13-1.19-1,0-1.88,0-2.79,0-.51,0-.94-.13-.92-.72s.45-.64.92-.64h2.89c0-.42.09-.77.13-1.19h-.7c-.8,0-1.59,0-2.4,0-.48,0-.83-.16-.85-.66s.37-.72.86-.7h3.22c0-.46,0-.8.06-1.21-1.15,0-2.22,0-3.28,0a1.11,1.11,0,0,1-.79-.43c-.28-.45.12-.88.77-.88,1.13,0,2.26,0,3.46,0V13.37c-1.21,0-2.4,0-3.58,0a1,1,0,0,1-.7-.6c-.1-.42.24-.69.69-.7s.94,0,1.4,0h2.4c0-.42.09-.74.13-1.19H23.23c-.48,0-.82-.18-.82-.67S22.78,9.5,23.24,9.51ZM21.8,19v7.17a3.46,3.46,0,0,1-3.71,3.72c-2.86,0-5.72,0-8.57,0A3.48,3.48,0,0,1,5.75,26.2V17.56c0-2.93,0-5.88,0-8.83a8,8,0,0,1,16,.42C21.83,12.43,21.8,15.74,21.8,19Z"/><path class="cls-1" d="M20.44,9.15a7.75,7.75,0,0,0-.57-2.79A6.66,6.66,0,0,0,7.11,8.89c0,1.24,0,2.46,0,3.69,0,1.64,0,3.29,0,4.93v8.7A2.14,2.14,0,0,0,9.43,28.6c2.89,0,5.8,0,8.69,0a2.12,2.12,0,0,0,2.34-2.32C20.47,20.57,20.48,14.86,20.44,9.15ZM13.65,27.33a3.84,3.84,0,1,1,3.89-3.86A3.85,3.85,0,0,1,13.65,27.33Z"/><path class="cls-1" d="M16.19,23.52A2.52,2.52,0,1,1,13.72,21,2.51,2.51,0,0,1,16.19,23.52Z"/></g></g></svg>
                        <span>
                            Squat Toilet
                        </span>
                        {{-- Fan --}}
                        <svg  class="ml-5" xmlns="http://www.w3.org/2000/svg" height="40" width="40"  xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                            <desc>Created with Fabric.js 1.7.22</desc>
                            <defs>
                            </defs>
                            <g transform="translate(128 128) scale(0.72 0.72)" style="">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)" >
                                <path d="M 81.643 27.915 c -0.047 -0.022 -0.094 -0.042 -0.143 -0.061 c -3.222 -1.233 -6.569 1.377 -10.805 4.686 c -3.429 2.679 -7.599 5.937 -12.708 8.098 c -0.045 -0.135 -0.102 -0.265 -0.151 -0.399 c -0.08 -0.214 -0.152 -0.431 -0.242 -0.64 c -0.16 -0.378 -0.34 -0.746 -0.534 -1.107 c -0.027 -0.05 -0.058 -0.098 -0.086 -0.148 c -0.18 -0.325 -0.372 -0.642 -0.579 -0.952 c -0.041 -0.061 -0.084 -0.12 -0.126 -0.18 c -0.124 -0.179 -0.242 -0.362 -0.375 -0.536 c 7.441 -9.597 9.59 -19.311 6.198 -28.206 c -2.023 -5.057 -7.804 -8.219 -15.462 -8.458 c -7 -0.201 -15.847 2.3 -18.715 8.344 c -0.022 0.047 -0.042 0.094 -0.061 0.142 c -1.235 3.226 1.378 6.57 4.686 10.804 c 2.675 3.423 5.927 7.586 8.089 12.685 c -0.155 0.051 -0.304 0.116 -0.456 0.172 c -0.195 0.073 -0.394 0.139 -0.585 0.221 c -0.382 0.162 -0.754 0.344 -1.118 0.54 c -0.046 0.025 -0.089 0.053 -0.135 0.078 c -0.329 0.182 -0.65 0.377 -0.964 0.586 c -0.06 0.04 -0.118 0.083 -0.178 0.124 c -0.181 0.125 -0.365 0.244 -0.54 0.378 c -9.59 -7.428 -19.296 -9.57 -28.183 -6.182 c -5.057 2.024 -8.219 7.805 -8.458 15.464 c -0.218 7.002 2.3 15.846 8.344 18.713 c 0.047 0.022 0.094 0.043 0.142 0.062 c 3.224 1.232 6.57 -1.379 10.805 -4.687 c 3.42 -2.673 7.579 -5.922 12.672 -8.084 c 0.044 0.134 0.101 0.262 0.149 0.394 c 0.079 0.213 0.152 0.429 0.242 0.637 c 0.162 0.382 0.343 0.754 0.54 1.119 c 0.013 0.024 0.029 0.048 0.042 0.072 c 0.193 0.352 0.402 0.695 0.626 1.03 c 0.031 0.046 0.064 0.089 0.095 0.135 c 0.136 0.198 0.268 0.398 0.414 0.589 c -7.424 9.588 -9.567 19.294 -6.179 28.179 c 2.024 5.058 7.805 8.219 15.463 8.458 c 0.278 0.008 0.559 0.013 0.842 0.013 c 6.854 0 15.119 -2.553 17.873 -8.356 c 0.022 -0.047 0.043 -0.094 0.062 -0.143 c 1.234 -3.226 -1.379 -6.569 -4.687 -10.804 c -2.677 -3.426 -5.932 -7.593 -8.093 -12.696 c 0.142 -0.047 0.279 -0.108 0.42 -0.16 c 0.201 -0.076 0.405 -0.144 0.602 -0.229 c 0.381 -0.162 0.752 -0.343 1.116 -0.538 c 0.027 -0.014 0.052 -0.031 0.078 -0.046 c 0.348 -0.19 0.686 -0.398 1.017 -0.618 c 0.054 -0.036 0.105 -0.075 0.158 -0.111 c 0.191 -0.132 0.385 -0.259 0.569 -0.4 c 9.598 7.439 19.312 9.587 28.203 6.196 c 5.058 -2.023 8.219 -7.805 8.458 -15.464 C 90.204 39.627 87.687 30.783 81.643 27.915 z M 51.142 52.517 c -0.215 0.176 -0.438 0.342 -0.667 0.499 c -0.052 0.036 -0.105 0.07 -0.157 0.104 c -0.184 0.121 -0.372 0.235 -0.564 0.343 c -0.085 0.048 -0.169 0.096 -0.256 0.141 c -0.149 0.078 -0.302 0.149 -0.455 0.22 c -0.128 0.059 -0.255 0.121 -0.386 0.174 c -0.018 0.007 -0.037 0.013 -0.055 0.02 c -0.702 0.279 -1.44 0.478 -2.207 0.589 c -0.008 0.001 -0.015 0.005 -0.023 0.006 c -0.455 0.066 -0.917 0.111 -1.39 0.111 c -3.013 0 -5.709 -1.377 -7.495 -3.535 c -0.01 -0.012 -0.019 -0.025 -0.029 -0.037 c -0.174 -0.212 -0.337 -0.433 -0.493 -0.659 c -0.036 -0.053 -0.071 -0.107 -0.106 -0.161 c -0.12 -0.183 -0.233 -0.37 -0.341 -0.561 c -0.048 -0.086 -0.097 -0.171 -0.143 -0.259 c -0.078 -0.149 -0.149 -0.302 -0.22 -0.455 c -0.058 -0.128 -0.121 -0.254 -0.173 -0.385 c -0.012 -0.03 -0.021 -0.06 -0.033 -0.09 c -0.273 -0.695 -0.469 -1.424 -0.578 -2.182 c -0.001 -0.006 -0.003 -0.011 -0.004 -0.017 c -0.065 -0.454 -0.11 -0.914 -0.11 -1.386 c 0 -3.012 1.377 -5.708 3.534 -7.494 c 0.014 -0.012 0.029 -0.022 0.042 -0.033 c 0.21 -0.172 0.429 -0.334 0.653 -0.488 c 0.057 -0.039 0.115 -0.076 0.172 -0.114 c 0.18 -0.118 0.364 -0.229 0.552 -0.335 c 0.089 -0.05 0.177 -0.1 0.267 -0.146 c 0.148 -0.078 0.3 -0.148 0.452 -0.218 c 0.129 -0.059 0.256 -0.121 0.388 -0.174 c 0.053 -0.021 0.107 -0.038 0.16 -0.059 c 0.677 -0.259 1.387 -0.448 2.122 -0.552 c 0.005 -0.001 0.009 -0.003 0.014 -0.004 c 0.448 -0.064 0.903 -0.108 1.369 -0.108 c 3.011 0 5.706 1.376 7.491 3.531 c 0.016 0.019 0.03 0.039 0.045 0.058 c 0.167 0.205 0.325 0.417 0.475 0.635 c 0.042 0.062 0.083 0.125 0.123 0.187 c 0.114 0.174 0.221 0.351 0.324 0.532 c 0.053 0.094 0.106 0.188 0.156 0.284 c 0.074 0.141 0.14 0.285 0.207 0.43 c 0.062 0.135 0.127 0.269 0.182 0.407 c 0.014 0.034 0.025 0.07 0.038 0.104 c 0.269 0.69 0.462 1.414 0.57 2.164 c 0.001 0.006 0.003 0.011 0.004 0.017 c 0.064 0.451 0.109 0.908 0.109 1.376 c 0 3.013 -1.378 5.711 -3.536 7.496 C 51.16 52.503 51.151 52.51 51.142 52.517 z M 35.694 16.84 c -2.09 -2.674 -4.454 -5.7 -4.121 -6.857 c 1.8 -3.621 8.176 -6.188 14.934 -5.972 c 4.647 0.145 10.208 1.783 11.861 5.916 c 3.474 9.11 -0.713 17.81 -5.376 23.952 c -2.258 -1.631 -5.02 -2.604 -8.012 -2.604 c -0.114 0 -0.224 0.014 -0.337 0.017 C 42.288 25.321 38.664 20.642 35.694 16.84 z M 16.842 54.305 c -2.674 2.089 -5.698 4.457 -6.857 4.121 c -3.621 -1.8 -6.183 -8.189 -5.973 -14.933 c 0.145 -4.648 1.783 -10.208 5.916 -11.863 c 9.101 -3.471 17.792 0.706 23.93 5.36 c -1.63 2.257 -2.602 5.018 -2.602 8.009 c 0 0.123 0.015 0.241 0.018 0.363 C 25.312 47.717 20.639 51.338 16.842 54.305 z M 54.306 73.158 c 2.09 2.674 4.453 5.699 4.121 6.856 c -1.801 3.62 -8.199 6.165 -14.934 5.973 c -4.648 -0.146 -10.208 -1.783 -11.862 -5.916 c -3.471 -9.102 0.709 -17.795 5.363 -23.932 c 2.253 1.62 5.006 2.585 7.986 2.585 c 0.127 0 0.25 -0.016 0.376 -0.019 C 47.711 64.677 51.336 69.357 54.306 73.158 z M 85.989 46.505 c -0.146 4.647 -1.783 10.208 -5.916 11.862 c -9.11 3.474 -17.812 -0.714 -23.955 -5.378 c 1.621 -2.253 2.588 -5.008 2.588 -7.99 c 0 -0.118 -0.015 -0.232 -0.018 -0.35 c 5.98 -2.354 10.665 -5.983 14.471 -8.956 c 2.676 -2.09 5.718 -4.45 6.857 -4.121 C 83.636 33.372 86.199 39.761 85.989 46.505 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <circle cx="44.976000000000006" cy="44.996" r="4.886" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            </g>
                            </g>
                            </svg>
                            <span class="mt-4">Fan</span>
                        </div>
                        {{-- Price --}}
                        <div class="card border-0" style=" border-radius: 10px; background-color: #f9f9f9; margin-top: 90px; margin-left: -35px; height: 200px; width: 515px;">
                            <div style="margin-top: 30px; border-right: 2px solid; width:320px; padding-top: 50px; padding-bottom: 30" class="ml-4">
                                <h3>IDR 950.000,00 / month</h3>
                                <p class="text-muted text-right mr-2">"Not Include Electricity Costs"</p>
                            </div>
                            <div class="row justify-content-end " style="margin-top: -110px; margin-right: 45px">
                                <input type="text" id="picker" placeholder="Start Date"  class=" text-left text-bold btn btn-outline-secondary btn-sm"  style="padding-top: 10px; padding-bottom: 10px; width: 120px">
                                <i class="fa-solid fa-caret-down" style="margin-left: -25px; margin-top: 13px"></i>
                            </div>
                            <div class="row justify-content-end mr-3" style="margin-top: 15px">
                                <a href="{{route('booking')}}" class="btn btn-secondary btn-lg">Start Book</a>
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
    {{-- date --}}
    <script>
        flatpickr("#picker", {});
    </script>
@endsection
