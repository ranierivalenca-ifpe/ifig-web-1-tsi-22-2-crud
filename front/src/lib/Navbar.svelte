<script>
  import { currentPage } from "../stores";

</script>


<button on:click={() => $currentPage = 'index'}>
    Index
</button>
<button on:click={() => $currentPage = 'register'}>
    Register
</button>