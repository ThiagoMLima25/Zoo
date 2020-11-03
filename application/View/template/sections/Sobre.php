<section data-include="Sobre">
    <div id="Sobre" data-include="Sobre" class="flex-container pt-3">
        <div class="col-3 mb-2 p-2 container-section ">
            <label class="section-label d-flex justify-content-center">Sobre</label>
        </div>
        <div class="col-12 offset-md-1 col-md-10" class="flex-container pt-3">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'zoo')" id="defaultOpen">Zoológico</button>
                <button class="tablinks" onclick="openTab(event, 'animals')">Animais</button>
                <button class="tablinks" onclick="openTab(event, 'vegetation')">Vegetação</button>
            </div>

            <div id="zoo" class="tabcontent">
                <p>
                    <label>&emsp; O Zoológico de Guarulhos, criado em 1981, mantém cerca de 500 animais, de 100 diferentes espécies, priorizando a fauna nacional,
                    com 91% de espécies nativas. O Zoo participa de programas de conservação de espécies ameaçadas, realiza pesquisas científicas e 
                    atividades de educação para conservação. Os animais recebem cuidados constantes, tanto preventivos como curativos, por uma equipe 
                    de biólogos, veterinários e tratadores, incumbidos da manutenção de sua saúde e bem estar.</label>
                </p>
                <div class="text-center">
                    <div class="col-12">
                        <span><label><strong>Mapa do Zoológico</strong></label></span>
                    </div>
                    <img id="img-modal" src="./application/src/images/mapa.jpg" style="width:100%;max-width:300px">
                    <div id="box-modal" class="box-modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <img class="box-modal-content" id="img01">
                        <div id="modal-caption"></div>
                    </div>
                </div>
            </div>
            <div id="animals" class="tabcontent">
                <div class="container-slider">
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/arara_vermelha.jpg">
                        <div class="demo">
                            &emsp;No Brasil ocorre desde a Amazônia até o oeste do Piauí, Bahia, Minas Gerais, Mato Grosso do Sul e São Paulo. Mede até 90 cm e pesa até 1,5 kg.
                            Os ovos medem cerca de 5 cm, com incubação feita apenas pelas fêmeas em um período de 29 dias. Ameaçada devido ao desmatamento e principalmente a 
                            captura de filhotes para o comércio ilegal.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/Gato_do_mato_pequeno.jpg">
                        <div class="demo">
                            &emsp;O menor felino brasileiro é um animal solitário, de hábito noturno, que habita o solo, mas é capaz de escalar árvores com facilidade, 
                            sendo encontrado em todos os biomas do Brasil. A gestação de cerca de 2 meses gera apenas um filhote. Embora possa adaptar-se a áreas modificadas 
                            pelo homem, a redução das áreas naturais ameaça a sobrevivência da espécie.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/Lobo_guara.jpg">
                        <div class="demo">
                            &emsp;É uma espécie de pernas longas, coloração alaranjada e orelhas grandes, que habita ambientes abertos como campos e cerrados. 
                            Ocorre no Brasil central, áreas do sudeste e sul. Alimentam-se de frutos e pequenos vertebrados, sendo injustamente acusados de predação 
                            de aves domésticas, o que leva a sua perseguição e abate, o que, aliado a atropelamentos, ameaça a espécie.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/lontra.jpg">
                        <div class="demo">
                            &emsp;Ocorrência na Amazônia, cerrado, mata atlântica, pantanal e campos do sul. Alimenta-se de peixes, crustáceos, répteis,
                            aves e pequenos mamíferos. Possui geralmente hábito noturno. Os machos desta espécie apresentam hábito solitário e só se juntam à 
                            fêmea para reprodução. As principais ameaças são perda de habitat, poluição da água e caça.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/Mutum_do_sudeste.jpg">
                        <div class="demo">
                            &emsp;Espécie endêmica da Mata Atlântica de baixada, passa a maior parte do tempo no solo, onde se alimenta de frutos e sementes,
                            e se empoleira para dormir e nidificar. Atualmente é encontrado apenas em 11 localidades em Minas Gerais, Espírito Santo e Bahia,
                            habitando matas primárias ou em avançada regeneração, sendo muito sensível à caça, alteração e fragmentação de seu habitat.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/onca_parda.jpg">
                        <div class="demo">
                            &emsp;Segundo maior felídeo das Américas, é encontrada em todos os biomas brasileiros. Animal de hábitos noturnos e terrestres,
                            escala árvores com facilidade. Pode gerar de 2 a 4 filhotes em gestação de cerca de 90 dias. A caça, o desmatamento e fragmentação
                            de áreas naturais, a redução da disponibilidade de presas e os atropelamentos são ameaças à sobrevivência da espécie.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/onca_pintada.jpg">
                        <div class="demo">
                            &emsp;Maior felídeo das Américas, ocorre por todo o Brasil, ocupando florestas densas da Amazônia e Mata Atlântica,áreas de Cerrado
                            e Caatinga e o Pantanal. Necessitam grandes áreas com boa quantidade de presas para viver, sendo a redução de habitat e o isolamento
                            ameaças à espécie. Os conflitos devido a predação e os atropelamentos são também fatores de impacto sobre as populações.
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="slider-img" src="./application/src/images/animals/Papagaio_de_peito_roxo.jpg">
                        <div class="demo">
                            &emsp;Caracterizado pela coloração arroxeada do peito, este papagaio habita as florestas frias, principalmente matas de araucárias,
                            formando grandes bandos. Antes encontrada desde a Bahia até o Rio Grande do Sul, hoje restringe-se ao sudeste e sul do Brasil. A destruição
                            de seu habitat preferencial e a captura pelo tráfico são grandes ameaças á sobrevivência da espécie.
                        </div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)"><i data-feather="arrow-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i data-feather="arrow-right"></i></a>
                    
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                </div>
            </div>
            <div id="vegetation" class="tabcontent">
                <p>
                    &emsp; Espécie endêmica da Mata Atlântica de baixada, passa a maior parte do tempo no solo, onde se alimenta de frutos e sementes, 
                    e se empoleira para dormir e nidificar. Atualmente é encontrado apenas em 11 localidades em Minas Gerais, Espírito Santo e Bahia, 
                    habitando matas primárias ou em avançada regeneração, sendo muito sensível à caça, alteração e fragmentação de seu habitat.
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    function openTab(evt, value) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(value).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";
        if (dots.length > 0) {
            dots[slideIndex-1].classList.add("active");
            captionText.innerHTML = dots[slideIndex-1].textContent;
        }
    }

    var modal = document.getElementById("box-modal");
    var img = document.getElementById("img-modal");
    var modalImg = document.getElementById("img01");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
    }

    function closeModal(){
        modal.style.display = "none";
    }
</script>