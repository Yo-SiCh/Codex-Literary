@extends('layouts.template')

@section('title', 'Codex Literary')

@section('css, javascript')
    {{-- <script type="text/javascript" src="{{ asset('js/home.js') }}" defer></script> --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <main id="home_main">
        <section id="top_main">
            <section id="categories">
                <section>
                    <a href="#">
                        <svg width="20px" height="20px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000" d="M365.1 21.31c-6.3-.03-12.4.5-16.9 1.4-4.3.86-6.9 2.81-6.8 2.25-5.4 9.07-11.1 24.96-12.3 38.47-.7 6.95-.2 13.21 1.3 17.39 1.5 4.17 3.2 6.1 6.5 7.31.3.1.4.18.5.25 0-.11.1-.28.4-.55 1.1-.97 3.2-4.03 5.3-8.1 4.1-8.15 7.5-19.78 16.1-28.18 9.2-8.93 21.6-12.1 30.4-16.15 4.4-2.02 7.7-4.15 9.1-5.64.4-.5.6-.75.8-1.05-6.2-3.54-19.3-6.95-31.7-7.33v-.02c-.9-.03-1.8-.04-2.7-.05zm-27.7 67.07c-.1.18.1.14 0 0zm72.3-44.28c-3.8 3.39-8.2 5.63-12.6 7.65-10.4 4.81-21.4 8.86-25.3 12.69-1.2 1.19-2.6 3.38-4.1 6.13 3.4 3.18 7.5 6.16 12 8.69 10.1 5.62 20.8 7.85 29.1 7.08 8.4-.63 13.6-3.77 16.2-8.32 2.5-4.55 2.3-10.69-1.6-18.1-2.7-5.4-7.4-11.01-13.7-15.82zm-50.3 43.19c0 .17-.1.33-.2.5-2.4 4.82-5 9.59-9.4 13.51-3.4 2.9-8.6 5-13.8 4.8-7.4 10.2-16 20.9-26.7 32.2 21.9 9.6 38 18.5 57.8 31.9 7.1-27.8 16.3-48.5 25.9-67-7.3-1.4-14.8-4.2-22-8.19-4.2-2.3-8.1-4.9-11.6-7.72zm-102 16.91c-24.1 1.1-35.8 11.4-42.4 23.5-6.6 12-6.6 27-4.9 32 .5 1.8.3 1.3 1 1.4.7.2 3 .2 6.2-1.3 6.4-3.1 15.3-11.3 20.8-23.5l4.1-9 8.5 4.9c7.4 4.2 17.9.6 22.8-5.5.5-5.7-1.1-11.5-4.2-15.7-3.2-4.3-7.3-6.7-11.1-6.8h-.8zm22.4 41.2c-8.3 5.9-19 8.3-29.4 5.7-2.8 4.8-6 9.1-9.4 12.8 65.4 23.4 80.5 30.9 129.6 69.3 1.1 30.4 4 73.9 1 96.9-2.4 18.3 17.7 12 18 .2.4-18.3-3.1-37.9.7-54.7.8 15.7 14.8 13.5 15.1.3l.7-43.6 6.8-6.3c-63.8-48.1-79.5-59.2-133.1-80.6zm-8.3 48.8l-52.8 95.6 9.2 18.5-22.5 5.4-29.5 53.4 10 8.2 21.7-3.7 91.5-165.4c-8.1-4.1-16.9-7.8-27.6-12zm43.5 20.7l-84.5 152.8 37.8-6.4 37.6-68.1-1-24 17.8-6.3 17.1-30.9c-9.2-6.9-17.1-12.4-24.8-17.1zm-193.1 131L21.17 402.1v15.6l98.63-13.5 23 48.4-16.2 7.8-17.4-36.6-88.03 12V496H391.4l-5.9-10.8-74-29.3-55.4 21.7-6.6-16.8 62-24.3 60.4 23.9-.8-1.4-82-82.9-85.5 14.5 24.4 20.9-11.8 13.6-39.9-34.2-54.4-45z"/>
                        </svg>
                        <p>ADVENTURE</p>
                    </a>
                </section>
                <section>
                    <a href="#">
                        <svg width="20px" height="16px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 350 350" style="enable-background:new 0 0 350 350;" xml:space="preserve">
                            <path d="M175,0C78.504,0,0,78.504,0,175s78.504,175,175,175s175-78.504,175-175S271.496,0,175,0z M137.78,252.797
                                c42.949-53.426,73.572-22.072,73.572-22.072s-3.594,6.896-34.66,18.551c24.326,3.135,39.117-12.613,39.117-12.613
                                C232.529,264.184,196.812,301.074,137.78,252.797z M175.509,174.729c-41.748,0-75.713,33.965-75.713,75.713
                                c0,35.602,24.707,65.518,57.87,73.563v0.365C82.885,315.744,24.624,252.055,24.624,175C24.624,92.082,92.083,24.623,175,24.623
                                c5.05,0,6.855,0.164,6.855,0.164c38.332,2.963,68.231,35.615,68.231,74.771C250.087,174.375,175.509,174.729,175.509,174.729z"/>
                            <path d="M136.796,116.779c0,0,11.861-18.055,36.365-19.15c-28.6,16.822-30.955,24.234-30.955,24.234s35.559,25.621,68.683-34.393
                                C144.435,50.063,115.592,92.545,136.796,116.779z"/>
                        </svg>
                        <p>CULTIVATION</p>
                    </a>
                </section>
                <section>
                    <a href="#">
                        <svg width="20px" height="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="243px" height="260px" viewBox="0 0 243 260" enable-background="new 0 0 243 260" xml:space="preserve">
                            <path d="M218.97,42.44c0-16.84,8.79-31.63,22.03-40.01C237.97,2.14,234.61,2,231.51,2c-28.96,0-54.69,12.55-72.64,32.5
                            c5.9,9.44,9.4,21.21,9.4,33.95c0,16.84-6.11,31.94-15.78,42.27c-9.49-12.82-26.03-21.06-33.8-26.07c-2.55-1.65-4.66-4.37-4.66-7.59
                            c0-4.41,3.59-8,8-8c3.58,0,5.73,2.9,7.79,5.59c1.95,2.54,6.82,8.2,9.17,10.93c1.13,1.31,2.96,1.78,4.58,1.17l4.42-1.65l-3.53-1.51
                            c0,0-3.5-7.69-4.76-10.83l11.4,5.71l-0.57,4.83l5.69-5.61c1.17-1.16,1.16-3.05-0.03-4.18l-4.57-4.37
                            c-3.16-3.73-3.54-9.26-6.01-14.83c-3.57-8.1-8.47-12.85-8.47-12.85c0,5.91-1.98,9.85-1.98,9.85s-7.026-3.742-16.188-2.637
                            c-8.413,0.053-16.256-5.006-19.498-13.054c0,0.001,0,0.001,0,0.002l-0.001-0.003c0,0-2.495,10.936,6.951,17.813
                            c-0.144,0.097-0.287,0.194-0.43,0.295c-5.875,1.924-12.494,0.107-16.52-4.828c0,0-0.934,7.141,3.62,11.421
                            c1.397,1.313,2.93,1.878,4.386,2.036c-2.713,3.974-4.607,8.65-4.709,13.585c-0.29,13.59,3.971,18.836,13.22,28.49
                            c1.568,1.636,2.21,3.71,2.21,5.34c0,4.17-3.37,7.55-7.54,7.55c-2.12,0-4.577-1.153-6.15-2.538
                            C83.705,105.263,74.82,87.81,74.82,68.45c0-12.71,3.48-24.45,9.37-33.88C66.24,14.58,40.5,2,11.51,2C8.41,2,5.03,2.14,2,2.43
                            c13.24,8.38,22.03,23.17,22.03,40.01c0,14.58-6.61,27.63-16.98,36.32c20.65,3.52,36.38,21.5,36.38,43.16c0,2.46-0.22,4.87-0.61,7.22
                            c1.58-0.12,3.19-0.14,4.81-0.18c23.49-0.55,50.13,10.28,54.41,34.65c3.001,17.083,8.651,34.848,19.044,51.649
                            c6.887,11.134,9.048,20.47,0.406,27.359c-6.999,5.58-21.841,5.69-28.254-19.934c4.904,0.215,9.421,1.975,13.04,4.836l-14.892-28.477
                            l-13.847,29c3.422-2.914,7.733-4.824,12.477-5.284c0.087,8.824,1.582,19.814,7.546,25.859c5.677,5.754,13.29,9.382,20.95,9.382
                            c8,0,15.367-3.168,21.48-8.95c7.488-7.082,14.878-18.717,6.016-42.533c-7.1-19.08-8.282-31.556-4.191-45.483
                            c5.955-20.274,30.127-32.074,53.555-32.074c1.62,0,3.22,0.06,4.81,0.18c-0.39-2.36-0.61-4.76-0.61-7.22
                            c0-21.66,15.73-39.64,36.38-43.16C225.58,70.07,218.97,57.02,218.97,42.44z"/>
                        </svg>
                        <p>FANTASY</p>
                    </a>
                </section>
                <section>
                    <a href="#">
                        <svg width="20px" height="20px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000" d="M185.418 36.882s-24.67 5.747-35.756 15.557c-38.586 34.149-51.256 67.652-53.746 105.53l-43.97 47.023c96.221-17.906 207.672-21.92 340.581-20.912-21.002-14.144-41.37-25.753-59.322-36.814-14.473-35.496-33.701-76.597-65.934-95.373-14.145-8.24-29.144-14.024-43.962-16.83-10.736-20.307-35.4-11.819-37.89 1.82zM104.977 214.8c20.328 40.62 56.635 79.575 89.761 103.012 18.256 12.63 36.742 21.653 51.035 24.144 11.946 2.242 23.46-1.416 28.825-10.672l.002-.004v-.002c8.103-14.299 14.714-28.724 20.359-43.197 15.776 1.737 33.408 2.541 38.04-1.178 7.31-5.871-8.751-56.088-16.056-69.443 3.057-6.22 3.057-12.795 3.057-17.58-39.436-2.194-150.638 6.423-215.023 14.92zm342.142 6.07c-13.335.302-24.897 9.857-33.428 22.668-9.413 14.137-16.138 33.34-18.798 55.055-2.66 21.714-.771 41.971 4.95 57.963 4.29 11.99 11.133 22.318 20.655 27.515l-10.77 108.676 17.913 1.775 10.615-107.13c12.015-1.592 22.443-10.62 30.299-22.418 9.413-14.137 16.136-33.339 18.797-55.053 2.66-21.714.77-41.974-4.952-57.965-5.721-15.991-15.983-29.026-31.087-30.877a29.036 29.036 0 0 0-4.194-.209zm2.004 18.076c5.494.673 11.846 6.541 16.33 19.075 4.485 12.533 6.397 30.421 4.033 49.71-2.363 19.29-8.538 36.186-15.916 47.266-7.377 11.08-14.955 15.242-20.449 14.568-5.494-.673-11.844-6.54-16.328-19.074-4.485-12.533-6.396-30.42-4.033-49.709 2.363-19.289 8.536-36.187 15.914-47.267 5.011-6.164 12.69-15.168 20.449-14.569zM99.172 242.53c-6.243 8.543-13.975 17.27-23.111 25.744-12.11 11.231-26.664 21.827-43.198 30.211 37.101 7.524 77.514 23.385 115.21 42.594 42.326 21.57 80.776 47.18 106.775 71.145l2.314-24.686c-11.388-12.634-23.526-23.83-35.869-34.252-12.152-5.001-24.557-12.203-36.797-20.672-36.371-25.164-70.878-60.916-85.324-90.084zm344.582 11.276c.036 21.503 3.015 45.534 9.771 64.632 6.729-19.745 7.02-55.246-9.771-64.632zm-137.598 54.43a353.014 353.014 0 0 1-7.74 16.574c7.33 5.423 11.536 10.592 13.904 15.505 3.119 6.47 3.49 13.077 2.176 21.295-2.24 14.002-10.213 31.472-14.32 52.23-9.049 12.67-1.565 56.042 18.265 60.938 44.677 11.03 69.71-35.7 59.614-46.716-9.817-10.713-37.598-19.736-57.92-19.952 4.048-14.733 9.79-28.985 12.136-43.656 1.666-10.412 1.325-21.456-3.736-31.955-4.255-8.827-11.576-16.856-22.379-24.264zm-272.875 8.81C28.53 324.342 23.344 332.53 18 341.459V494h255.152c-2.921-14.12-5.609-28.7-8.763-42.629-.65-5.674-5.269-9.093-9.059-13.314-21.957-24.459-66.328-55.92-115.432-80.942-35.16-17.917-72.94-32.625-106.617-40.07z"/>
                        </svg>
                        <p>THRILLER</p>
                    </a>
                </section>
                <section>
                    <a href="#">
                        <svg width="20px" height="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 23.051 23.051" style="enable-background:new 0 0 23.051 23.051;" xml:space="preserve">
                            <path d="M11.523,0C6.068,0,1.645,4.423,1.645,9.882c0,5.078,3.831,9.257,8.765,9.812c0.431,0.49,1.428,1.785,1.383,3.357
                                c0.27-1.557,0.867-3.157,1.511-3.448c0.008-0.004,0.008-0.008,0.012-0.012c4.603-0.843,8.09-4.866,8.09-9.709
                                C21.405,4.423,16.981,0,11.523,0z M11.463,19.302c-5.204,0-9.424-4.218-9.424-9.42c0-2.582,1.042-4.918,2.721-6.621L4.704,3.524
                                v0.26C4.7,3.779,4.651,3.797,4.055,4.456C3.376,5.207,3.512,5.321,3.512,5.321l0.045,0.366l0.188,0.157l0.104,0.283l0.154,0.5
                                V7.15l0.098,0.241c0,0,0.207,0.177,0.616,0.271c0.408,0.094,0.344,0.021,0.326,0.094c-0.022,0.073,0.042,0.25,0.333,0.325
                                c0.289,0.073,0.248,0.292,0.248,0.292s0.326,0.333,0.438,0.47c0.117,0.136,0.251-0.292,0.221-0.271
                                c-0.031,0.02-0.398-0.063-0.398-0.167c0-0.105,0.314-0.608,0.03-0.585c-0.282,0.02-0.417,0.073-0.33-0.231
                                C5.663,7.285,5.322,7.391,5.27,7.422C4.82,7.568,4.936,7.264,4.936,7.118c-0.033-0.92,0.627-1.003,0.627-1.003
                                S5.96,6.127,6.252,6.074c0.292-0.053,0.25,0.292,0.221,0.345C6.597,6.847,6.68,6.46,6.68,6.46l0.06-0.282
                                c0,0,0.045-0.261,0.057-0.334c0.502-0.189,0.772-0.625,0.772-0.625c0.782-0.995,2.016-0.775,2.016-0.775L9.96,4.476
                                C9.597,4.894,10.2,4.663,10.2,4.663l0.168-0.084c0,0,0.21-0.074,0.397-0.145c0.188-0.073,0.117-0.242,0-0.367
                                S10.702,3.88,10.702,3.88s-0.019-0.178-0.041-0.293c-0.022-0.114-0.169-0.072-0.169-0.072l-0.067-0.106V3.242
                                c0,0-0.121,0.01-0.424-0.084c-0.3-0.094,0.356-0.573,0.356-0.573h0.24h0.116c0,0,0.06-0.011,0.06-0.167
                                c0-0.157-0.037-0.022,0.169-0.219c0.209-0.199,0-0.283,0-0.283l-0.176-0.147c0,0-0.18-0.062-0.304-0.23
                                c-0.124-0.167-0.27-0.188-0.27-0.188s-0.139-0.135-0.303,0c-0.17,0.135,0,0.188,0,0.188L9.626,1.717c0,0-0.209,0.167-0.333,0.179
                                c0,0-0.063,0.616-0.387-0.021c-0.325-0.64-0.585-0.263-0.585-0.263S8.27,1.801,8.224,2.009c-0.037,0.21-0.142,0.313-0.229,0.137
                                C7.913,1.968,7.831,2.041,7.831,2.041L7.538,2.074L7.077,1.916C6.732,2.271,6.083,2.585,6.083,2.585S5.708,2.783,5.585,2.783
                                c-0.128,0-0.034,0.135-0.034,0.135L5.225,2.831c1.665-1.472,3.842-2.372,6.238-2.372c2.462,0,4.698,0.952,6.377,2.5h-0.555
                                L16.7,2.824l-0.385,0.135l-0.2-0.134h-0.439h-0.314c0,0-0.596-0.731-0.941,0c-0.292,0.229-0.679,0.333-0.679,0.333h-0.228
                                l-0.293-0.073l-0.499-0.114l-0.401,0.187c-0.282,0.512-0.364,0.868-0.364,0.868l-0.18,0.5l-0.198,0.553l-0.123,0.493
                                c0,0-0.146,0.649,0.431-0.105c0.195-0.178,0.528-0.272,0.528-0.272s0.409,0.023,0.573,0.377c0.169,0.356,0.274,0.334,0.274,0.334
                                l-0.063-0.24l0.063-0.176l0.124,0.039v0.137l0.057,0.146c0,0,0.124,0.157,0.269,0.094c0.165,0.042,0.491-0.21,0.427,0.392
                                c-0.344,0.371-0.479,0.508-0.479,0.508l-0.128-0.115l-0.209-0.073l-0.154-0.075L13.14,6.168l-0.211-0.042L12.467,6.19
                                c0,0-1.022,0.02-0.689,1.586c0.584,1.453,0.584,1.453,0.584,1.453l0.105,0.45l0.105,0.312c0,0,0.128,0.439,0.671,0.188
                                c0.435,0.292,0.435,0.292,0.435,0.292s0.024,0.21,0.012,0.419c-0.012,0.208,0.187,0.459,0.187,0.459l0.045,0.896
                                c0,0-0.158,0.379,0.094,1.131c0.093,0.804,0.131,0.897,0.131,0.897s0.391,0.596,0.806-0.114c0.421-0.71,0.515-1.097,0.515-1.097
                                s-0.116-0.189,0.325-0.45c0.053-0.45,0.072-0.816,0.072-0.816s-0.176-0.312,0.367-0.877c0.143,0.021,0.247,0.094,0.247,0.094
                                s0.211,0.125,0.286-0.219c-0.18-0.199-0.222-0.251,0-0.512c0.029-0.261,0.176-0.377-0.356-0.847
                                c0.356-0.27,0.585-0.459,0.585-0.459l0.083-0.219c0,0,0.221-0.157-0.218-0.354c-0.397-0.284-1.057-0.91-1.057-0.91l-0.3-0.304
                                c0,0-0.391-0.313,0.153-0.199c0.117,0.117,0.229,0.135,0.229,0.135l0.168-0.009c0,0,0.251-0.19,0.555,0.198
                                c0.304,0.387,0.667,0.773,0.667,0.773l0.42,0.355l0.304,0.115l0.154,0.376l0.175,0.397l0.222,0.45c0,0,0.199,0.229,0.209-0.209
                                c0.012-0.439,0.159-0.705,0.159-0.705l0.123-0.205c0,0,0.094-0.511,0.461,0.011c0.364,0.522,0.503,0.554,0.503,0.554v0.187
                                L20.115,9.7l0.139,0.011V9.533l0.239,0.156l0.124,0.193l0.179-0.109V9.344l-0.209-0.366c0,0-0.368-0.322,0.082-0.366
                                c0.034-0.09,0.056-0.198,0.071-0.309c0.086,0.516,0.143,1.039,0.143,1.579C20.884,15.084,16.666,19.302,11.463,19.302z"/>
                            <path d="M10.053,10.065L9.701,9.96L9.187,9.731L9.06,9.428L9.012,9.281L8.936,9.136H8.865L8.768,8.99H8.351V8.87l-0.18-0.214
                                L7.924,8.428H7.58c0,0-0.221,0.152-0.439-0.14C6.919,7.996,6.617,8.551,6.617,8.551l-0.23,0.105
                                c0.124,0.261-0.018,0.667-0.082,0.772c-0.391,0.73-0.263,0.941-0.263,0.941l0.135,0.261c0,0,0.24,0.345,0.285,0.397
                                c0.154,0.638,0.333,0.626,0.333,0.626l0.356,0.263c0,0,0.342,0.438,0.352,0.552C7.515,14.286,8.291,15.5,8.291,15.5l0.634,0.71
                                l0.397,0.083l0.146-0.147l-0.333-0.188L8.989,15.76l-0.012-0.292l-0.166-0.282L8.79,14.862l0.082-0.336l0.337-0.125v-0.188
                                l0.093-0.178L9.439,13.9v-0.146l-0.011-0.146l0.135-0.147l0.012-0.23l0.022-0.271l0.217-0.261h0.199l0.179-0.167l0.072-0.189
                                l0.034-0.333l-0.023-0.543l0.165-0.22l0.168-0.283l0.041-0.239l-0.052-0.302L10.053,10.065z"/>
                            <path d="M19.185,13.512c-0.019-0.188,0.053-0.322-0.228-0.427c0,0-0.619-0.158-0.784,0.084c-0.146,0.091-0.292,0.103-0.292,0.103
                                l-0.106,0.094l-0.198,0.189l-0.355,0.398c0,0-0.356,0.302-0.293,0.689c0.064,0.386,0.222,0.667-0.142,0.679
                                c-0.309,0.219-0.402,0.366-0.402,0.366s-0.269,0.491,0.297,0.251c0.499-0.313,0.664-0.669,0.956-0.292
                                c0.109,0.188,0.214,0.584,0.689,0.082c0.484-0.5,0.941-0.971,0.941-0.971s0.18-0.251-0.09-0.564
                                C19.096,14.026,18.945,13.942,19.185,13.512z"/>
                        </svg>
                        <p>HISTORY</p>
                    </a>
                </section>
                <section>
                    <a href="#">
                        <svg width="20px" height="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 511.994 511.994" style="enable-background:new 0 0 511.994 511.994;" xml:space="preserve">
                            <path d="M315.871,174.051L280.534,42.168c-0.785-2.927-3.072-5.222-5.999-6.016c-2.918-0.802-6.05,0.017-8.209,2.125
                                l-20.233,19.789c-54.485,53.274-134.178,74.632-208.026,55.74l-27.418-7.023c-2.918-0.751-6.042,0.111-8.183,2.27
                                c-2.133,2.159-2.961,5.282-2.176,8.209l35.328,131.883c17.357,64.734,76.109,107.537,140.16,107.537
                                c12.39,0,24.994-1.604,37.521-4.958C290.561,331.013,336.573,251.312,315.871,174.051z M177.17,181.176
                                c3.337-21.99,14.293-35.627,32.58-40.525c18.253-4.907,34.577,1.425,48.461,18.807c2.944,3.678,2.347,9.054-1.34,11.998
                                c-3.695,2.944-9.045,2.338-11.989-1.348c-9.66-12.083-19.174-16.068-30.72-12.979c-11.597,3.115-17.801,11.315-20.122,26.607
                                c-0.64,4.224-4.275,7.253-8.422,7.253c-0.427,0-0.862-0.034-1.297-0.102C179.662,190.179,176.462,185.835,177.17,181.176z
                                M95.131,210.232c-0.631,4.233-4.275,7.262-8.422,7.262c-0.427,0-0.853-0.034-1.289-0.102c-4.659-0.7-7.868-5.052-7.159-9.711
                                c3.328-21.99,14.276-35.627,32.572-40.525c18.287-4.915,34.594,1.425,48.478,18.807c2.935,3.678,2.338,9.045-1.348,11.989
                                c-3.686,2.953-9.054,2.338-11.989-1.34c-9.66-12.075-19.123-16.068-30.729-12.979C103.647,186.748,97.443,194.949,95.131,210.232
                                z M175.489,305.524c-20.685,0-40.849-6.886-57.694-20.079c-3.703-2.901-4.352-8.269-1.451-11.972
                                c2.901-3.721,8.26-4.361,11.989-1.459c19.208,15.053,43.733,20.079,67.294,13.773c23.552-6.315,42.283-22.929,51.405-45.585
                                c1.766-4.378,6.767-6.477,11.102-4.736c4.369,1.758,6.485,6.733,4.727,11.102c-11.136,27.682-34.031,47.983-62.814,55.697
                                C191.899,304.449,183.647,305.524,175.489,305.524z"/>
                            <path d="M509.527,228.516c-2.133-2.15-5.248-3.012-8.183-2.261l-17.331,4.437c-48.768,12.476-99.985,9.071-146.543-9.361
                                c-1.084,17.801-5.18,35.089-11.776,51.285c0.213-0.265,0.435-0.478,0.657-0.751c2.935-3.678,8.294-4.275,11.989-1.348
                                c3.686,2.944,4.284,8.311,1.34,11.998c-8.926,11.187-18.884,17.724-29.713,19.703c-21.06,31.309-53.018,55.467-92.254,65.988
                                c-6.724,1.801-13.542,3.157-20.403,4.079c14.054,48.026,51.712,85.589,101.385,98.901c12.535,3.354,25.122,4.958,37.521,4.958
                                c64.043,0,122.82-42.803,140.16-107.537l35.328-131.883C512.488,233.799,511.661,230.675,509.527,228.516z M385.504,430.825
                                c-1.05,0.418-2.125,0.623-3.191,0.623c-3.371,0-6.571-2.022-7.91-5.35c-9.131-22.656-27.861-39.262-51.405-45.577
                                c-23.569-6.289-48.102-1.28-67.311,13.773c-3.721,2.91-9.071,2.261-11.981-1.451c-2.91-3.712-2.261-9.071,1.451-11.981
                                c23.475-18.406,53.47-24.542,82.261-16.828c28.774,7.714,51.661,28.006,62.814,55.689
                                C391.989,424.092,389.873,429.058,385.504,430.825z M438.59,309.02c-10.846,13.585-23.177,20.42-36.77,20.42
                                c-3.806,0-7.706-0.538-11.699-1.604c-18.278-4.898-29.235-18.534-32.572-40.525c-0.708-4.659,2.492-9.011,7.151-9.719
                                c4.668-0.717,9.003,2.492,9.711,7.159c2.33,15.283,8.533,23.492,20.13,26.598c11.648,3.106,21.086-0.896,30.72-12.979
                                c2.935-3.678,8.303-4.275,11.989-1.348C440.928,299.966,441.534,305.333,438.59,309.02z"/>
                        </svg>
                        <p>DRAMA</p>
                    </a>
                </section>
                <section>
                    <a href="#">
                        <p>MORE CATEGORIES...</p>
                    </a>
                </section>
            </section>
            <section id="slideshow--upper">
                <section id="slideshow_button--upper">
                    <input type="button" class="current_slideshow" data-selected="true">
                    <input type="button" class data-selected="false">
                    <input type="button" class data-selected="false">
                    <input type="button" class data-selected="false">
                </section>
            </section>
            <section id="news">
                <p>LATEST NEWS</p>
                <section id="news--latest">
                    <a href="https://www.independent.co.uk/arts-entertainment/books/walter-tevis-queens-gambit-other-books-b1797643.html" target="_blank">
                        <p>The writer of The Queen&lsquo;s Gambit was much...</p>
                    </a>
                    <a href="https://www.independent.co.uk/extras/indybest/books/fiction-books/best-jane-austen-books-novels-review-b1793354.html" target="_blank">
                        <p>6 best Jane Austen books: From &lsquo;Sense and...</p>
                    </a>
                    <a href="https://www.independent.co.uk/arts-entertainment/books/heaven-book-review-mieko-kawakami-b1854996.html" target="_blank">
                        <p>Mieko Kawakami&rsquo;s Heaven - review: &lsquo;an unrele...</p>
                    </a>
                    <a href="https://www.independent.co.uk/independentpremium/marcel-proust-search-lost-time-b1859092.html" target="_blank">
                        <p>Book of a Lifetime: In Search of Lost Time by...</p>
                    </a>
                    <a href="https://www.independent.co.uk/extras/indybest/books/fiction-books/best-debut-novels-books-read-amazon-a9378216.html" target="_blank">
                        <p>The best debut novels to have on your radar</p>
                    </a>
                    <a href="https://www.independent.co.uk/topic/novels" target="_blank">
                        <p>MORE STORIES</p>
                    </a>
                </section>
            </section>
        </section>
        <section id="middle_main">
            <section id="updates">
                <h2>NEW RELEASE</h2>
                <a href="#">
                    <p class="updated_release">The Witcher - Chp. 48</p>
                </a>
                <a href="#">
                    <p class="updated_release">Harry Potter and the Rebirth of Voldemort...</p>
                </a>
                <a href="#">
                    <p class="updated_release">The Hard Thing About Hard Things</p>
                </a>
                <a href="#">
                    <p class="updated_release">The Innovator's Dilemma: When New...</p>
                </a>
                <a href="#">
                    <p class="updated_release">The Art of War - Chp. 12</p>
                </a>
                <a href="#">
                    <p class="updated_release">Zero to One - Chp. 2</p>
                </a>
                <a href="#">
                    <p class="updated_release">In Search of Lost Time</p>
                </a>
                <a href="#">
                    <p class="updated_release">Atomic Habits - Chp. 7</p>
                </a>
                <a href="#">
                    <p class="updated_release">Madame Bovary - Chp. 66</p>
                </a>
                <a href="#">
                    <p class="updated_release">One Hundred Years of Solitud</p>
                </a>
                <a href="#">
                    <p class="updated_release">Ulysses - Chp. 46</p>
                </a>
                <p class="updated_release">...</p>
            </section>
            <section id="popular">
                <h2>POPULAR</h2>
                <section id="popular--weakly">
                    <h3>POPULAR THIS WEAK</h3>
                </section>
                <section id="popular--monthly">
                    <h3>POPULAR THIS MONTH</h3>
                </section>
            </section>
            <section id="contest">
                <h2>CONTESTS</h2>
                <a href="https://creative-capital.org/about-the-creative-capital-award/" target="_blank">
                    <article class="contest--information">
                        <h3>Creative Capital</h3>
                        <p>Creation of groundbreaking art by innovative and adventurous artists across the country through our national.</p>
                    </article>
                </a>
                <a href="https://orwellsociety.com/dystopian/the-orwell-society-dystopian-fiction-prize-2022-open-for-entries/" target="_blank">
                    <article class="contest--information">
                        <h3>The Orwell Society Dystopian</h3>
                        <p>The eighth annual short story competition for current students (both BA and MA) at British universities.</p>
                    </article>
                </a>
                <a href="https://www.jewishbookcouncil.org/awards/natan-notable-books" target="_blank">
                    <article class="contest--information">
                        <h3>Natan Notable Books</h3>
                        <p>Natan Notable Books is a twice-year­ly award for non­fic­tion books on Jew­ish themes.</p>
                    </article>
                </a>
                <a href="https://fountainmagazine.com/blog/the-fountain-essay-contest-2021-2022" target="_blank">
                    <article class="contest--information">
                        <h3>The Fountain Essay</h3>
                        <p>An essay that you feel your heart rests more comfortably on. The more concise an essay, the more acceptable it is.</p>
                    </article>
                </a>
                <a href="https://www.kulcher.org/2022-great-american-think-off-question/" target="_blank">
                    <article class="contest--information">
                        <h3>The Great American Think-Off</h3>
                        <p>A challenging philosophical dilemma meant to inspire thinkers from all walks of life.</p>
                    </article>
                </a>
                <p>...</p>
            </section>
        </section>
    </main>
@endsection