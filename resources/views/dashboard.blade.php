@extends('layoutprincipal')
@auth

    @section('dash')
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-141734189-9');
        </script>

        <head>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>

            <!--Estilo de Letra-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/styles.css">

            <!--GOOGLE FONTS-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&family=Tiro+Devanagari+Hindi&display=swap"
                rel="stylesheet">

            <!--ICONO PAG-->
            <link rel="shortcut icon"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAA51BMVEX///+y0jPrAIwAre++1S9lLZGx0S/g7LX9/vvu9di711LT5Zev0Sew0Suu0B/j7sDq8tH5/PDP6vvH3ncAqO75z+LqAIXQ4oz5+fm60xXb0+NZEory9+PX56Dy+OCusLKlp6nx8fLd6669vsCwsrSeoKLq6uvT1NW7vL7LzM7g4eKvsLO21EDJ33/7/fXE3G+92Fq41UeUeLgAn+BiJJKGd4Di7r6pzQC711bo8MnW5ZrD3HDZ56bY5fTcBYxLktIIhsxlN4OrvT1NndltEYZwSYrOS5vIVZ90hsMAlddmMpCQiXhgH5M78nctAAAPNUlEQVR4nO2dCXuruBWG8bQjLwFs1+2YtkkAs4PXdpp7k8lMp8t0mfb//56eI8BmkbDAJIFbvue5vg4ISS/azhFClkZfuKSPzsBbawDsuwbAvmsA7LsGwL5rAOy7BsC+6/8YkCiy8o4ZuVWKQgjrOA+QqNvv1q/j/uh1fRzJDEQ2IFFnm+lS6pUm94s7UkZkARKFbCYfnd9GWq5L9ZQBSMiuZ4WX0eIoXwMkyuv+o7N5g+4PyhVAdfPRebxNy5VaCai89LP5XZQvwyKgsupv+0s1PREuINkuPjp7LehV5QLK64/OXBuabAkPUO1/BUWNVQ6gcvjorLWj+0srzAOqTx+dtXa0X8tsQOX+o7PWksZsQHL8MpqgJD2fu5kcoHLos5GW1XTGBJTXfbdiUvEA794K8PmwYujwZlbFuwOOVYUhdf5GyX0E4IihAbCxBsC2NQC2rAGwbQ2ALWsAbFsDYMsaANvWANiyBsC2NQC2rAGwbQ2ALWsAbFsDYMsaANvWANiy+ga4XC7vp1P4FM1fnwAXm/XucDgcZzP4XO3uNs8Cz/j6Arifr7YjouBa0Fj4dbQ9vkyvZFQMcPK4YKp4B+/ZwbK6kxl8I/mhMur7zUllLXMlRFZPL89VT6PFAJeHTypDn6aF2HbMYDkx+SDBiqjvH46sBa4ppKwcNvwVBYKAK+aaZrUIuOZkv77kx3Ok88/sJcoXKWR2x2uOnQdc7ipK7yyikBd2KXYdcHFgdkplEXn2xOpvOg44PYnHSJQ1oxC7DTid1XmfgSjHYoY6DvhYiw+XL5WLsMuA+0O96Mj2uV9V9EGwfzlnh7XEtcOA063A+JCRcmLwdRhwsqvZALflHqbTgM81C5A8MM3uzgJOmVY5UWT1Ewhs2oL9xlsf2VVA5YlVgGR02DxKk8nk/mn9eZRFJNtHiamuAhJWASrH7DjwvJ5dzFSZ95bOuwDKGXF6DkXOS52VC1A5FMbxx7ttkqC84vC9D+DD5iJ236isN3kxHH9yKo3jk+lBJfQUp4K+CyAZZW+84JTFohxM2bEA5jMCbXHM43sfwOztFQR8LcdEXpkE9+tt1QLsrgKyYuK8yjGZHyomZboKeCgnyClBUNXsYVcBj4xOlNkGr6lHgIxe9MsCLI+DXxrgSJnVfx+nV4AjZTSvi9hVQEYvSuMiq5oNsauAXG9X3u5qvQbUVcAN1y8hinJciD/76iogwxa9SFGPY9EOtauAk+oZNUU+vnIdiF4AcrrRTKxkdifylmpnAdnhcvHK6t31itpZwOXpShHSbJ4qHn12HHDyIjK/Q+Qj86FZDwAzOauUMqreVKS7gNKr2Mw2kZWqbZk6DLjnmGvlBNQ1vxA7DCjdizydj5M4fOysWkNA6XkkTDhiPnnpOqA0Fn4AQ0YcE7zbgJOxIkw4Y/tR3QYEr0IVJVQ+M8f8rgNKi5Poc1Dlcy8BpelKtDNV73oJKC3Xgg2RuZFYDwClyXwr1hKVXXlKqg+AYNTcbUVKkYyqTNouA0rSfHdtTSXN9q5klfYFUFrOZ9frKSElk603gFBPH05X66n80mNAyMbL7MqQQUqrnXoFCNmtXL6NERX70Z4Bgg81rhwz5GJEvQOEtjg+Eq75phQbYVdXWVTr6cAbNJTiksp2AZmPTMgoG1c7L2ctN5zFwKVdNW8DLI46RybgNhukrbfP7tnL8VsGLJYgc779bQAlacVMrLhs+zbAYraYs9FvBbhkzbo1BOQsQpOLK1eYod4KUBqzEmsIyH5nrLhy5ZFZznnrokVA1tw3KU5cCAI+sLNO8qFe2CsJc+2+RcAla7VQs06GWRswXzkXen9gL43IlfOTWGtuDPhdM8A5e4JSya1DZa5CLrbUOXMyV+Wvh+SLVUUbDvTZ3ZxzIg+ZMJyHsvnSYd+qRq/UsqqV8lAIJPoOLyfzRFk/xiH3z7wXjeRcVBzABlvuMocJuTj9KwrIXW4un9abp/n4Ycd7jkCOuagW7LGywSIt5uM1uZm7BO2L+8icyOpoK8tcZ7tQOJznmtxV81xtWHeUzIrBhF8zr/Qzq84p+clKZsXC21SnH51Mpmx/omR6iAM2fSWiZFpwFmkRZfcgrPWM/XpC3jOrBzgVmbZjSCnG9MKLp/jqRJU4cTD6KmHA/a5REZJTcTpd/Klm/cQYc/fiWz0sar4NFoux0FpkAUwzKYzBRhxwv26QMULKD+2EFsA0EfP9lxqbdfCsmSqx3jpd1nxzVTwx1lBTZzeS5091k1SYv+rQ3jtqOcnMHzmptd3Kq/AT81icd6bua749LiZlxTSGagHWbIZkyxm8mUbIjeK9c1Bvw5x9ndpFuL8bM2m/kqq895fq7gi0E66lStUvU32uWdmvCMwgnjdSe8ujsVgDImRXtZJzz3U+muDJn/m/MVR/T6fp+vovghL1tKn2f/avo7Z6Gnm0q1i+3WDTqv3iUHrJO0dHZOXu6orxyfSotlBPiSyvSltL3QgIelyf8MdSmXTKaFaxujGr+XFLbmHEtLZVpdccELcBuzvMCPq5aVniVmCyfDqun8R/smn6sJqNVBpJzREW09oed5urad2wr9pyMd+svzuetnRHLfl0Ou7u5ouab8DtpxjJ4XQ6Xd3PK6vT7HA3fn4UmMi5ceO4CW7Fl2i53DfbbW6yh0jO0QhJfO+/d98Z7701APZdA2DfNQD2XQNg3zUA9l11ADV2FJrnlc6EQTvZc8M0EU7iVyUAqAVxbkPLzVyoBee0fb2YuhY47OS8IPA8/HDZ5wsybT3+Etj5C8zyPeVIBNC248wZYeZC004LSbPEAS3f9w0dPkL2+WI8fgwYGl7+ROiI3aEbACUzpWIASjxATdNcwxKucAlgWocyJ9w3KkEzNE0vwLunhfFn4JkIqLleEJpSeigGhKAhZsQMk3P0IADGX8Iwvkma6eFpE+CTYBqc0y6AppuEjK8xMUAaDE4k1yN2fNkNgKHh65HhwA11Ix/S853INmxbg5M21D3Mpm9EkWE72Pk4vu8EmmTqcNW5DFLA0IhsPCu5vmMYjmk6lm8YBoYzLSOi32LAwDB0x0Is+GZEgeFKHlZRuI1woatZhm3QOoxf/FsBDc90bUjCtaGmWfAXJBNpEt5jD/NkGQEcMhzacODeOh5kMNTcYgmGhoXhQsT3XJf+H7ghRi3ZmIgFV1JAz7Fc08Oce4bluoGhx4Ca7+CFmgTF6PqGiQmabrFx1wbE3GGuETD+S7OjpP5AQFe3adVygD7CgxAkyPdO8UWWcz4bdyBmhE0Zb1KINQQS0Ckg9KQmDe+atoEJRQlgHCyRZ3iFdJoCYqQYNQIiaNLJaB5UE8NO+ztog5AdW9fhw3R1x790ejEgZDuwLMvwtciOC9fU8bgLCSQZtQwTAUM9KXHPpIlLVgII55MMenaEddSEal3qXAUAzQQQ6z4PEMaFIAwhoEcBcZiAsvRQUIfcQL/08ymgjYCBJwFjBtC8AEJ6FDDGAkA3LrK0DVp6cmd8IwhpPQgto1SIIpaMT2OCBqcVAOO/cKCnucaiDs8VML0vSe7ttBGmgBGOGTBe6MkYfgFMbhKklylBuJlm3IP4hRL0nDAdKTU3ikwpJxFAaBe0dVhSARCaiUu7Q43e3DCyATI+5GA1zdxNvwAIZZzUpoB2pVlA1/FNjMOmbRD+hXhDANfCa1zn3Ab9JAJTOrfkQC9UUhFAzTfswHYwi3HDpoAR7dYMaEfQO0CvEgS2oWMZ4yEcJmAM8b0AbBbf8gIjSAeopBeFrjgIPSuEW2JAMEvTEkALc+uHHnaWGppqrqF70Lt6eI2Dcae9qOVAI7BMGLpC2gYCiDCt8LUAoRWDiRVgEbjUAsVP08NbFlq+FYYBNjP44iEFHPJDamybgU8vw6u9c83RrLjzc+GG2BYdznzdBkB63PQxWg+OYH+hBRZNJDIsOoJDKkGInUyIdxs6F133TfzPCuFWQT+nW4UaKupNaHnjSiufuISg37TswfzV5ytMM7FPNPolDXs5UvwrThmbs5a9UMJPmuglXF1AUYWMkaipp+OWzC4TLFDsr+vE0i6gppfsbqhVtiXs3GRlOcXqFjo61tbi4Upd1iHnAdm7cl+TFhUBXd2wAmhhzOBupc8TGEUSsOODjNkupMvyzRwgd4FEtcqAFvbxnErq2pWVrQzYSDsWYHmN4HWBwwTWoq4lXkxy1E7HPzjouXGPAK0Lv6FxTp2d9ISGUcS9Cvo98UAOZ+OOBF21JoAPLEDlO/GntIlMC3wXH9sgODX22TTz0y8eeEc4SMHQBk4PDuXo+1C7xbbRGdJ8H6KgYzx1i2wbAUMwZ9EScB0vcsSmAQpapOs5coCsXSEqhZ6TC4M3dQ3Bh7KMuH25MO7TfIE/BY6VR62G0MWu0ETvx6Qn0KhFtw6doQBtE+oWAaCLThWeNZ1kKKyvUxmQuSlEtWIb1ARbRrPRmHCNpH0BtJH6EqbtIyCO4Ab0O+cw9E+N9ppgb2qaQYsRXTw6GwIxAqDddF5to5YAZdZPb1SLWrxY/zTT8S10hKz0lAtFAzUQ7RHDj/NNAyaAWujDCQSkbiUAnr0GEyxQ9Dn0CGJtPhGZFOEFkIxqt8B4DoH2onCvA1RmHgzN7sCwPE9nAOIJ8Bi0ZO4KABMHiQLqNC6oz47HTFdETwVAIjd4kShxDbEEwa7W8saZi64O9CNJFc0BulhZtSgLmJQgOrzgcsWR3QKYrP1LAQnnpzeq5epYwcDF0WKCVPQruEZhOlF1BjRjwDClvABKRuRSEwHaYOrA3gIoLVfyBbAZH1YoG5wiHCZC3QjA/4kn8gw/8HBqTQOfB2c1UkAMSD0mU4cTEXYtftoGARpqpo6AZoQ1G3yOmwDBnJFTQCK/NjOz0WkBLw6NMnCEwNuJAcHxMaivFIIHBN4hekDYMVoW9ax0D07grYFbQE9IVuxy6dTVi+OKsHYLzoVzdL9SCAIStdFu5Ali4rRkHaGMC5OezntFWtWJbASNn77EWj7IkqKMZuMv5alZWUvpsB7XHx76pAYbyQ8aNGjQoEGDBg0aNGjQoEGDBg0aVK3fNNX3v2qs73/XQI+LRpK+aagf/vzrxvrx9/X1l7/+tpGkrxrqh7/9orF+/Pu3X9fVTwD4ywZqDPjVP/75r8aE//6xNuDPP/30nyaEzQG/+uYPzcvwjz/XJvz2v3/6sgG//nYAZOl/kveAFz46DpgAAAAASUVORK5CYII=">

            <!--COMPONENTE LIBRERIA NECESARIO PARA QUE EL PRELOADER FUNCIONE-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


            <!-- FontAweome CDN Link for Icons-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

            <!--Scrollup Desactivado <script src="js/plugins/scrollUP.js"></script>-->


            <script src="js/plugins/jquery.easing.js"></script>

            <!--PRELOAD-->
            <div id="preload">

                <div id="porcentajeCarga">0%</div>

                <div id="lineaCarga">

                    <div id="rellenoCarga"></div>

                </div>

                <div id="estadoCarga"></div>

            </div>

            <link rel="stylesheet" href="css/dashmedia.css">


            <title>Panel Usuario Portugues | Test de Conocimientos</title>

        </head>

        <script>
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
            } else {
                document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
            }
        </script>


        <body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">

            <!--inicio del nav-->
            <nav
                class="_LPVUrp9Uina5fcERqWC taX5bm_AMmfFooXEd5Ny t6gkcSf0Bt4MLItXvDJ_ _Ybd3WwuTVljUT4vEaM3 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
                <div class="i8v96MUlFwGv9qJUkAx7 _Cj_M6jt2eLjDgkBBNgI wekyMYEi8zByMSCgzHQ_ W3VHmE2jAiCd1MN9SdsH">
                    <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2">
                        <div class="YRrCJSr_j5nopfm4duUc _HgeI6Dx9I__pBEYsPz0 Q_jg_EPdNf9eDMn1mLI2">

                            <div class="dropdown">

                                <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar"
                                    class="_SmdlCf6eUKB_V9S5IDj FJRldeiG2gFGZfuKgp88 R9nujHypnXyuHrBww9QK iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM N3Gb8rTHzm26fWGpfaqP ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX btn btn-secondary"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="#">Calendar</a></li>
                                    <li><a class="dropdown-item" href="#">Grades</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a type="buttom" href="{{ route('logout') }}">
                                            <button type="submit" class="dropdown-item">
                                                Log out</button>
                                    </li></a>
                                    </form>

                                </ul>
                            </div>
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            <a href="{{ route('inicio') }} " class="YRrCJSr_j5nopfm4duUc YcuQRAYEep0W4L0BFDfG">
                                <img src="https://static1.educaedu-colombia.com/adjuntos/12/00/08/uts---unidades-tecnol-gicas-de-santander-000879_large.jpg"
                                    href="{{ asset('logoAPP-PG-DEF.png') }}" style="width:50px;height:50px"
                                    class="object-top h-20 w-96">
                                &nbsp; &nbsp; &nbsp;
                                <span
                                    class="_rCfAafI7lqYALljdSxM q1oXbofRCOhVhOSB8tiU yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">
                                    Página Principal </span>
                            </a>
                        </div>


                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                            <button id="toggleSidebarMobileSearch" type="button"
                                class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                <span class="_DVAfiyo21kM68EUVzEQ"></span>
                            </button>

                            <a href="/plancurso" target="_blank">
                                <button type="button" target="_blank" data-dropdown-toggle="notification-dropdown"
                                    class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
                                    Contenido de Refuerzo Portugués</button></a>

                            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;

                            <a type="buttom" href="{{ route('logout') }}">
                                <button type="submit" data-dropdown-toggle="notification-dropdown"
                                    class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX barrnav">
                                    Log out</button></a>
                            </form>

                        </div>
            </nav>

            <!-- Fin del nav -->
            <br>
            <br>
            <br>
            <div
                class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd RZmKBZs1E1eXw8vkE6jY mlwbuv_bMkMhzTA3msA3 sIk4Wc5VFaQpncPF5Sx4 AWLGIryfLKwkSeUZd4O6 contenidodash">
                <div class="EWLTGduHCjFnjN6tLCXV hD0sTTDgbxakubcHVW2X QzGxlDe4W0Kn6V1Dkd6r">
                    <nav class="YRrCJSr_j5nopfm4duUc Td37IMFwOi4Zt3Vhv3cT" aria-label="Breadcrumb">
                        <ol class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI">
                            <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                <a href="{{ route('inicio') }}"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 rYHHksRBEMl_guI3q0UQ ZnBoTVi7VOJdCLSSU62n EJIoL6514Ry8r7nh011L dMTOiA3mf3FTjlHu6DqW">
                                    <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG T1qzIiYBzxDgBnL9ISMF"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Inicio
                                </a>
                            </li>

                            <li>
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr _JmTNv5EiHqK2A1jcQSf"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#"
                                        class="c2LzVf9SsdSEMBrRjNwS c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe rYHHksRBEMl_guI3q0UQ ZnBoTVi7VOJdCLSSU62n EbR_B0tHyczsKYnc0ktU EJIoL6514Ry8r7nh011L dMTOiA3mf3FTjlHu6DqW">Usuario</a>
                                </div>
                            </li>

                            <li>
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr _JmTNv5EiHqK2A1jcQSf"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span
                                        class="c2LzVf9SsdSEMBrRjNwS c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _JmTNv5EiHqK2A1jcQSf EbR_B0tHyczsKYnc0ktU qIT6vrYn0Fr1U3wlPXaS XIIs8ZOri3wm8Wnj9N_y"
                                        aria-current="page">Perfil</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <h1
                        class="vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl NdexIDe6BTJXjtSnppoV OyABRrnTV_kvHV7dJ0uE titlewelcome">
                        Bienvenido</h1>
                </div>
                <!-- Right Content -->
                <div class="EWLTGduHCjFnjN6tLCXV Atl0coQVHTfJeIp5DBNr">
                    <div
                        class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">


                        <div class="rvdRhGyExrNYTA6euxsF xu6Xcz2CnxX04u4eQAne SQf297smyJVNzzOO3iQL LvH1cgobxEYMRPVAp8WW">
                            <img class="TR_P65x9ie7j6uxFo_Cs XO0Hd72IH1CH2AVjcbWM v2F5G_Fm6X1wxdNJdQlJ mveJTCIb2WII7J4sY22F"
                                src="https://flowbite.com/application-ui/demo/images/users/jese-leos-2x.png"
                                alt="Jese portrait">
                            <div>



                                <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj OyABRrnTV_kvHV7dJ0uE">
                                    {{ auth()->user()->name_user }}</h2>
                                <ul class="gC_jEY75u_oxfOOKnLpH wezTbYJgxYJp5ZDqX67N">


                                    <li
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <svg class="fhCwost7CSNRc2WSHLFW E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">

                                            <path
                                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                            </path>
                                        </svg>

                                        Estudiante {{ auth()->user()->genero }}.
                                    </li>

                                    <li
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <svg class="fhCwost7CSNRc2WSHLFW E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Número de identificación {{ auth()->user()->ident }}.
                                    </li>

                                    <li
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <svg class="fhCwost7CSNRc2WSHLFW E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Bucaramanga, COL.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="rvdRhGyExrNYTA6euxsF xu6Xcz2CnxX04u4eQAne seNju9ak6k60nJPVDVyn">
                            <div class="HD0QRNT3lUqWQhXP5VK8">
                                <address
                                    class="c8dCx6gnV43hTOLV6ks5 yo0GKAXAsUDIWsazc10y _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    <div class="XJih04pKHf8Cekga6Hj3"><u>
                                            Correo Electrónico</u>

                                    </div>
                                    <p class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj OyABRrnTV_kvHV7dJ0uE">
                                        {{ auth()->user()->email }}</p>
                                    <div class="XJih04pKHf8Cekga6Hj3"><u>
                                            Dirección Personal</u>
                                    </div>
                                    <div
                                        class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        Cra 21, W, 66-02 La Gran Ladera, <br>Santander, Colombia.
                                    </div>
                                    <div class="XJih04pKHf8Cekga6Hj3"><u>
                                            Número Contacto</u>
                                    </div>
                                    <div
                                        class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        +57 3013727959
                                    </div>

                                    <div class="XJih04pKHf8Cekga6Hj3"><u>
                                            Carrera</u>
                                    </div>
                                    <div
                                        class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                        {{ auth()->user()->career }}
                                    </div>

                                </address>
                            </div>

                        </div>
                        <div>
                            <h3 class="TR_P65x9ie7j6uxFo_Cs d3C8uAdJKNl1jzfE9ynq IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                style="text-align: center;">
                                Activo</h3>

                            <hr style="margin-bottom: 2%;" class="border  border-primary opacity-50">

                            <div class="d-grid gap-2  mx-auto">

                                <button class="btn btn-success text-black fs-6 font-monospace"
                                    style="margin-bottom: 2%; margin-top:2%;" type="button" abbr
                                    title="Selecciona para editar tu perfil de usuario.">EDITAR
                                    PERFIL</abbr></button>

                                <a type="buttom" href="{{ route('logout') }}">
                                    <button type="submit"
                                        class="d-block mx-auto btn btn-danger text-black fs-6 font-monospace" abbr
                                        title="Selecciona para cerrar tu sesión.">
                                        CERRAR SESIÓN</abbr></a></button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="NM7Z1HBVjN_86WhEcXan">
                    <div
                        class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
                        <h3 class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj OyABRrnTV_kvHV7dJ0uE">
                            Información General</h3>
                        <dl
                            class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd bNuwEJVjy8l4O1aX1zho cvkpv2bmXbOtb62ppyJC AqVNvLG_H6VHhym2yKMp">
                            <div class="wwofGIyK_H_z3Xjelq8G">
                                <dt
                                    class="y0nOgdpiqOUaFDbjAxwD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Sobre mí</dt>
                                <dd
                                    class="iRFVFKvV59EjIwjCM62m tI6ZVpHcCWxY_MKHSQWC DSinOeYMF_Gmwu9gOltI c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    <p>Soy una persona de género {{ auth()->user()->genero }}, profesional y con actitud
                                        proactiva en el
                                        área de {{ auth()->user()->career }},
                                        con esto en mente, aspiro a optar un puesto con estabilidad salarial y comodidad
                                        laboral, respetando a los
                                        compañeros y administrativos de la organización.</p>
                                    <p> Mí objetivo principal es desenvolverme profesionalmente en las áreas de cara al público
                                        consumidor que busca una atención
                                        delicada y objetiva para la compra adecuada de sus necesidades. Tengo experiencia en la
                                        comunicación verbal y gestual.</p>

                                </dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Educación</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Thomas Jeff High School, Stanford University</dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Work History</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Twitch, Google, Apple</dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Fecha creación de usuario</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ auth()->user()->created_at }} </dd>
                                </dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Idiomas</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Inglés, Alemán, Italiano Y Español. </dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Organización</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Unidades Tecnológicas de Santander </dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    ID de usuario</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ auth()->user()->id }}</dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Departamento</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Ingeniería</dd>
                            </div>
                            <div>
                                <dt
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                    Fecha de Cumpleaños</dt>
                                <dd
                                    class="c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    {{ auth()->user()->updated_at }} </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

            <br>
            <div class="card text-center">
                <div class="card-header text-uppercase fw-bold">
                    <h1 class="titletest"> | prova de portugues | </h1>
                </div>
                <div class="card-body cardbody">
                    <h5 class="card-title" id="msg1">Este é um teste para avaliar o seu nível de português.</h5>
                    <p class="card-text" id="msg2">Con el soporte del framework de <u>Laravel 8</u>.</p>
                    <br id="msg3">
                    <a class="btn btn-outline-warning text-black" id="btnstartteste" onclick="ocultar1();" abbr
                        title="Selecciona para iniciar la prueba.">INICIAR TESTE</abbr></a>
                    <br>

                    <!--Con esta instrucción arrancará con todo el div, sin verse-->
                    <style>
                        #ShowAction {
                            display: none;
                        }

                        #btncerrarteste {
                            display: none;
                        }
                    </style>
                    <br>
                    <div id="ShowAction">

                        <h3 id="msg4">A continuación, procederás a realizar la prueba de conocimientos de Portugués ↓</h3>
                        <p id="msg5"> → Si deseas cancelar la prueba, dale click en <u
                                style="font-family:'Times New Roman', Times, serif">Cancelar
                                Teste.</u><br>
                            <button type="button" class="btn btn-link" id="msg6"
                                onclick="cuestionario()">Continuar...</button>
                        </p>

                        <br>
                        <br>

                        <section id="cuest">

                            <!-- start Quiz button -->
                            <div class="start_btn"><button>Iniciar Exámen</button></div>

                            <!-- Info Box -->
                            <div class="info_box">
                                <div class="info-title"><span>Reglas de tu Exámen de Portugués</span></div>
                                <div class="info-list">
                                    <div class="info">1. Solo tendrás <span>15 segundos</span> para responder cada pregunta.
                                    </div>
                                    <div class="info">2. Una vez que seleccionas tu respuesta, no se puede deshacer.</div>
                                    <div class="info">3. No puedes seleccionar ninguna opción una vez que se acaba el tiempo.
                                    </div>
                                    <div class="info">4. No puedes salir del Quiz mientras está corriendo el tiempo.</div>
                                    <div class="info">5. Obtendrás puntos con base en tus respuestas correctas.</div>
                                </div>
                                <div class="buttons">
                                    <button class="quit">Salir</button>
                                    <button class="restart">Continuar</button>
                                </div>
                            </div>

                            <!-- Quiz Box -->
                            <div class="quiz_box">
                                <header>
                                    <div class="title">Exámen Portugués</div>
                                    <div class="timer">
                                        <div class="time_left_txt">Tiempo Restante</div>
                                        <div class="timer_sec">15</div>
                                    </div>
                                    <div class="time_line"></div>
                                </header>
                                <section>
                                    <div class="que_text">
                                        <!-- Here I've inserted question from JavaScript -->
                                    </div>
                                    <div class="option_list">
                                        <!-- Here I've inserted options from JavaScript -->
                                    </div>
                                </section>

                                <!-- footer of Quiz Box -->
                                <footer>
                                    <div class="total_que">
                                        <!-- Here I've inserted Question Count Number from JavaScript -->
                                    </div>
                                    <button class="next_btn">Siguiente Pregunta</button>
                                </footer>
                            </div>

                            <!-- Result Box -->
                            <div class="result_box">
                                <div class="icon">
                                    <i class=""><img
                                            src="https://assets.website-files.com/5c6332cbd558b7db5b9817fc/60bfeb56162921608198e703_Logo-UTS-1-p-500.png"
                                            alt="UTS.LO.HACEMOS.POSIBLE"></i>
                                </div>
                                <div class="complete_text">Has finalizado tu exámen!</div>
                                <div class="score_text">
                                    <!-- Here I've inserted Score Result from JavaScript 
                                    <script>
                                        var str=”Mi texto”;
                                        document.getElementById('txt').innerHTML=str;
                                        </script>-->

                                </div>
                                <div class="buttons">
                                    <button class="restart">Repetir</button>
                                    <button class="quit">Salir</button>
                                </div>
                            </div>

                        </section>

                        <br>
                        <br>
                    </div>

                </div>
                <div class="card-footer text-muted">
                    {{ auth()->user()->created_at }}
                    <button type="button" class="btn btn-link" id="btncerrarteste"
                        style="font-family:'Times New Roman', Times, serif;!important" onclick="cerrarteste()">Cancelar Teste</button>
                </div>
            </div>

            <br><br><br><br>

            <!--FOOTER-->
            <footer
                class="_wYiJGbRZyFZeCc8y7Sf dPKKN86A3v0FrOZGwMAI _Zt0QWNoskeJIuWJ94UW _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _TsbEtxNT5XPbTk6VlSv hhVyfLYO5HBNKAsXwK1v t5cz8HTvFaREjnieK5hv LSIxp7RSuOKhsg28v_u3 SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
                <ul
                    class="YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 Q_jg_EPdNf9eDMn1mLI2 EyjJPKD7jgGRBhaLpRVI wezTbYJgxYJp5ZDqX67N _ZI9D_boHHl7De08RAA7">
                    <li><a href="#"
                            class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Términos
                            y condiciones</a></li>
                    <li><a href="#"
                            class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Política
                            de privacidad</a></li>
                    <li><a href="#"
                            class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">licenciamiento</a>
                    </li>
                    <li><a href="#"
                            class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Políticas
                            de Cookies</a></li>
                    <li><a href="#"
                            class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">Contacto</a>
                    </li>
                </ul>
                <div class="YRrCJSr_j5nopfm4duUc e2hrZSYddULUFUtJ9wBR _PC7_lPKkOLQCngwwxFs">
                    <a href="#"
                        class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a href="#"
                        class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </footer>

            <!--JS PROPIO (!!!DEBE IR AQUÍ PARA QUE EL SCROLLUP FUNCIONE!!!)-->
            <script src="js/script.js"></script>


            <!--JS (!!!DEBE IR AQUÍ PARA QUE EL TEST SE EJECTUE!!!)-->
            <script src="js/test/testscript.js"></script>

            <!--JS (!!!DEBE IR AQUÍ PARA QUE EL TEST SE EJECTUE!!!)-->
            <script src="js/test/questions.js"></script>

        </body>

    @endauth
