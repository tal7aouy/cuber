<script setup>
import { RouterView } from 'vue-router'
import {isEqual} from "fast-deep-equal";
</script>

<template>
  <div class="min-h-screen bg-gray-100 text-center antialiased">
    <RouterView />
  </div>
</template>