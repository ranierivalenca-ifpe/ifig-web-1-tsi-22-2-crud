<script>
  import Index from "./lib/Index.svelte";
  import Navbar from "./lib/Navbar.svelte";
  import Register from "./lib/Register.svelte";
  import { currentPage } from "./stores";

</script>

<main>
  <Navbar />

  {#if $currentPage == 'index'}
    <Index />
  {:else if $currentPage == 'register'}
    <Register />
  {/if}

</main>
