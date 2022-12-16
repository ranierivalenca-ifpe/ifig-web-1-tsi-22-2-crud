<script>
  import Index from "./lib/Index.svelte";
  import { currentPage } from "./stores";

</script>

<main>
  <h1>Hello cruel world</h1>

  {#if $currentPage == 'index'}
    <Index />
  {/if}

</main>
