<!-- resources/views/home.blade.php -->
@extends('layouts.master')

<body>
    @include('components.header')
    <main>
        <h1>Bem-vindo ao SENAI</h1>
        <div class="container">
            <section>
                <h2>Sobre o SENAI</h2>
                <div class="carousel">
                    <img src="img/foto1.jpg" alt="Imagem 1" class="active">
                    <img src="img/foto2.jpg" alt="Imagem 2">
                    <img src="img/foto3.jpg" alt="Imagem 3">
                </div>
                <p>
                    O Serviço Nacional de Aprendizagem Industrial (SENAI) é uma das maiores instituições de educação profissional e tecnológica da América Latina. Fundado em 1942, o SENAI tem a missão de apoiar diversas áreas industriais por meio da educação profissional, da inovação e da transferência de tecnologias industriais. Oferece cursos que vão desde a formação inicial e continuada até a pós-graduação, abrangendo várias áreas do conhecimento. Sua atuação é essencial para a competitividade da indústria brasileira, promovendo a capacitação de mão-de-obra e a inovação tecnológica.
                </p>
            </section>
            <section>
                <h2>Sobre a FIEP</h2>
                <p>
                    A Federação das Indústrias do Estado do Paraná (FIEP) é uma entidade de representação das indústrias do Estado do Paraná, fundada em 1944. A FIEP trabalha para promover o desenvolvimento econômico e social do estado, atuando em áreas como educação, saúde e segurança no trabalho, inovação, sustentabilidade, e responsabilidade social. A FIEP oferece suporte às indústrias através de diversos serviços, incluindo capacitação profissional, consultorias, e apoio à inovação. Também representa os interesses do setor industrial junto aos governos e à sociedade.
                </p>
            </section>
        </div>
    </main>
    @include('components.footer')
    <script src="{{ asset('app.js') }}"></script>
</body>
</html>
