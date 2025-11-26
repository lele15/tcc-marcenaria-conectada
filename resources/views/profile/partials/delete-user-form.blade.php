<section class="delete-account-section">

    <header>
        <h2>Excluir Conta</h2>
        <p>
            Uma vez excluída, todos os seus dados serão removidos permanentemente.
            Antes de continuar, salve qualquer informação importante.
        </p>
    </header>

    <!-- BOTÃO PARA ABRIR MODAL -->
    <button
        type="button"
        class="btn-delete"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        Excluir Conta
    </button>

    <!-- MODAL -->
    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable
    >
        <form method="POST" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('DELETE')

            <h2 class="text-lg font-medium text-gray-900">
                Tem certeza que deseja excluir sua conta?
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                Digite sua senha para confirmar a exclusão permanente da conta.
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Senha" class="sr-only"/>
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="Senha"
                    required
                />
                <x-input-error
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2"
                />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancelar
                </x-secondary-button>
                <x-danger-button type="submit">
                    Excluir Conta
                </x-danger-button>
            </div>
        </form>
    </x-modal>

</section>

<!-- JS VISIBILIDADE DE SENHA (opcional) -->
<script>
    function toggleSenha(idCampo, icone) {
        const campo = document.getElementById(idCampo);
        if(campo.type === "password") {
            campo.type = "text";
            icone.textContent = "visibility_off";
        } else {
            campo.type = "password";
            icone.textContent = "visibility";
        }
    }
</script>
