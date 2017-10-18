<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12"> 
                <button @click="selectedComponent = 'appQuote'">Quote</button>
                <button @click="selectedComponent = 'appAuthor'">Author</button>
                <button @click="selectedComponent = 'appNew'">New</button>
                <hr>
                <p> {{ selectedComponent }}</p>
                
                <!-- implement dynamic components -->
                <component :is="selectedComponent">
                    <h2 slot="title"> {{ quoteTitle }}</h2>
                    <p slot="subtitle">A nice wonderful super duper Quote</p>
                </component>
            </div>
        </div>
    </div>
</template>

<script>
    import Quote from './components/Quote.vue';
    import Author from './components/Author.vue';
    import New from './components/New2.vue';

    export default {
        data: function() {
            return {
                quoteTitle: '"The Quote"',
                selectedComponent: 'appQuote'
            }
        },
        components: {
            appQuote: Quote,
            appAuthor: Author,
            appNew: New
        }        
    }
</script>

<style>
</style>
