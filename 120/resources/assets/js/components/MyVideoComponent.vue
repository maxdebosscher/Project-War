<template>
  <div class="h20-link-main col-md-6 d-flex h20-bg-1">
    <div v-on:click="openOverlay()" class="m-auto">
      <h2 class="m-auto display-4 text-white">{{ title }}</h2>
    </div>
  
    <div ref="overlay" class="h20-overlay">
      <div v-on:click="closeOverlay()" class="h20-overlay-close">&times</div>
      <div class="h20-overlay-content">
        <video width="800" height="450" controls style="float: left; margin-right: 20px;">
          <source v-bind:src="url" type="video/mp4">
          Uw browser ondersteunt deze video niet.
        </video>
        <h4>{{ title }}</h4>
        <p>{{ text }}</p>
        <button class="h20-bottom-left btn btn-sm btn-link text-white">Volgende Video</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.');
  },

  data() {
    return {

    }
  },

  props: [
    'url',
    'title',
    'text'
  ],

  methods: {
    openOverlay() {
      this.$refs['overlay'].style.display = 'block';
    },

    closeOverlay() {
      this.$refs['overlay'].style.display = 'none';
    },

  },
}
</script>