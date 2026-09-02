<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { collection } from "@/routes";
import { CircleX, Package, Paintbrush, Plus, Trophy } from "@lucide/vue";
import PaintingListCard from "@/components/PaintingListCard.vue";
import LargePaintingListCard from "@/components/LargePaintingListCard.vue";
import { Button } from "@/components/ui/button";

defineOptions({
  layout: {
    breadcrumbs: [
      {
        title: "Collection",
        href: collection(),
      },
    ],
  },
});

defineProps<{ owned: object }>();
</script>

<template>
  <Head title="Collection" />

  <div class="mx-auto">
    <div class="grid grid-cols-3 gap-4 p-4">
      <div class="col-span-3">
        <LargePaintingListCard
          title="Currently Painting"
          :icon="Paintbrush"
          :boxsetCount="1"
          :modelCount="10"
        />
      </div>
      <div>
        <PaintingListCard
          title="Owned"
          :icon="Package"
          :boxsetCount="10"
          :modelCount="100"
        />
      </div>
      <div>
        <PaintingListCard
          title="Finished"
          :icon="Trophy"
          :boxsetCount="0"
          :modelCount="0"
        />
      </div>
      <div>
        <PaintingListCard
          title="Did Not Finish"
          :icon="CircleX"
          :boxsetCount="1"
          :modelCount="3"
        />
      </div>
    </div>
  </div>

  <div class="absolute right-0 bottom-0 p-4">
    <Button class="rounded-full"> <Plus /> Add miniatures </Button>
  </div>
</template>
