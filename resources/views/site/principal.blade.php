

@extends('site.layout.basico'){{-- pega a estrutura html do layout básico--}}

@section('titulo', 'Home'){{--declara que a section do título é igual a Home--}}
@section('conteudo') {{--atribui tudo que está dentro da section para conteudo--}}
    <div class="conteudo-destaque">
        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa</p>
                <div class="chamada">
                    {{-- 
                        asset
                        Usado para referenciar um arquivo da pasta public
                        para css ele pode se direcionar nos css tanto do resource quanto da pasta public
                    --}}
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>
            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida, por favor entre em contato com nossa equipe pelo formulário abaixo</p>
                @component('site.layout._components.form_contato'){{--irá procurar a pasta cujo o componente está inserido--}}
            {{--exibe o que está dentro do componente--}}
                @endcomponent
            </div>
        </div>
    </div>
@endsection