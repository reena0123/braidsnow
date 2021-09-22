<template>
    <Link :href="'/'">
    	<img src="/storage/assets/logonew.png" class="img-fluid" alt="Logo"  style="margin-top:0px;height: 15%;width:25%;">
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
