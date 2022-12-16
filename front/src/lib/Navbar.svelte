<script>
  import { currentPage, isLogged } from "../stores";

</script>


<button on:click={() => $currentPage = 'index'}>
    Index
</button>
{#if !$isLogged}
    <button on:click={() => $currentPage = 'register'}>
        Register
    </button>
    <button on:click={() => $currentPage = 'login'}>
        Login
    </button>
{:else}
    <button on:click={() => $currentPage = 'home'}>
        Página inicial
    </button>
    <button on:click={() => $isLogged = false}>
        Sair
    </button>
{/if}