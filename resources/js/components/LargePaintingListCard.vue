<script setup lang="ts">
import type { Component } from "vue";
import {
  Card,
  CardContent,
  CardHeader,
  CardTitle,
  CardDescription,
} from "@/components/ui/card";

defineProps<{
  title: string;
  icon: Component;
  boxsetCount: number;
  modelCount: number;
}>();
</script>

<template>
  <Card>
    <CardHeader>
      <CardTitle>{{ title }}</CardTitle>
      <CardDescription>
        {{ boxsetCount }} Boxsets / {{ modelCount }} Models</CardDescription
      >
    </CardHeader>
    <CardContent>
      <component :is="icon" />
    </CardContent>
  </Card>
</template>
