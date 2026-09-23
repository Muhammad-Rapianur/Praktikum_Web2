<script setup>
import { computed } from 'vue'

const props = defineProps({
  status: {
    type: String,
    required: true
  }
})

const labels = {
  open: 'Terbuka',
  pending: 'Diproses',
  closed: 'Selesai'
}

const label = computed(() => labels[props.status] ?? 'Tidak dikenal')
</script>

<template>
  <span class="status" :class="props.status">
    {{ label }}
  </span>
</template>

<style scoped>
.status {
  display: inline-block;
  padding: 0.2rem 0.5rem;
  border-radius: 0.3rem;
  font-size: 0.875rem;
  font-weight: 500;
}

.open {
  background: #e0f2fe;
  color: #075985;
}

.pending {
  background: #fef3c7;
  color: #92400e;
}

.closed {
  background: #dcfce7;
  color: #166534;
}
</style>