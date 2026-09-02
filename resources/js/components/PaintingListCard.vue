<script setup lang="ts">
import type { Component } from "vue";
import { Card, CardContent } from "@/components/ui/card";

defineProps<{
  title: string;
  icon: Component;
  boxsetCount: number;
  modelCount: number;
}>();
</script>

<template>
  <Card>
    <CardContent>
      <component :is="icon" />
    </CardContent>
  </Card>
  <h3 class="font-semibold">{{ title }}</h3>
  <p class="text-muted-foreground text-sm">
    {{ boxsetCount }} Boxsets / {{ modelCount }} Models
  </p>
</template>
