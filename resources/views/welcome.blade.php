@seoTitle('Jovem Aprendiz Agronegócio')
@seoDescription('Plantando um futuro melhor.')
@seoKeywords('jovem aprendiz, agronegocio, agro, Jovem Aprendiz Agronegócio')



<x-app-layout>


    {{--<x-splade-lazy>
        <x-slot:placeholder> 
          
          <div class="py-8">
            <div class="border border-blue-300 shadow rounded-md p-4 max-w-2xl w-full mx-auto">
              <div class="animate-pulse flex space-x-4">
                <div class="rounded-full bg-slate-700 h-10 w-10"></div>
                <div class="flex-1 space-y-6 py-1">
                  <div class="h-2 bg-slate-700 rounded"></div>
                  <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-4">
                      <div class="h-2 bg-slate-700 rounded col-span-2"></div>
                      <div class="h-2 bg-slate-700 rounded col-span-1"></div>
                    </div>
                    <div class="h-2 bg-slate-700 rounded"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
           </x-slot:placeholder>--}}

    
    
    <x-banner1 img="/BG Agro.jpg"/>
    {{-- <x-post-list /> --}}
    <section id="cadastro">
    <x-cadastro states="{!!$states!!}"/>
    </section>
    <x-post2-list />

    


  {{--</x-splade-lazy>--}}
  

  @if((request()->input('modalsuccess')) !== null)
  
  <div class="flex items-center justify-center h-screen">
    
    <dialog id="my_modal_1" class="modal" open >
      <a href="/" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</a>
      <form method="dialog" class="modal-box">
        <a href="/" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</a>
        <h3 class="font-bold text-lg">Parabéns!</h3>
        <h4 class="py-4">Seu cadastro foi efetuado com sucesso! </h4>
        <p class=""> Em até 15 dias entraremos em contato para enviar novas informações.<br><br>Obrigado por se cadastrar.</p>
        <div class="modal-action">
          <!-- if there is a button in form, it will close the modal -->
          <a href="/" class="btn">Fechar</a>
        </div>
      </form>
    </dialog>
    <!-- Fundo preto com opacidade -->
    <div class="fixed top-0 left-0 w-full h-full bg-black opacity-75 z-50"></div>
  </div>
  
  {{-- <x-splade-script>
    {!!(request()->input('event'))!!}
  </x-splade-script> --}}

  @endif

  
 
</x-app-layout>

