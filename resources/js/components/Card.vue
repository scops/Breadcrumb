<template>
    <card class="flex flex-col items-center justify-center">
        <div class="p-2">

            <h1 class="mb-1 text-90 font-normal text-base">

                <a v-if="this.card.parent_left" :href="'/admin/resources/' + this.card.list_left + '/' + resource.fields.find(el => el.attribute === this.card.parent_left).belongsToId" class="no-underline text-primary font-bold dim router-link-active" data-testid="card-back">←</a>
                <a v-else-if="this.card.list_left" :href="'/admin/resources/' + this.card.list_left" class="no-underline text-primary font-bold dim router-link-active" data-testid="card-back">← </a>

                <span v-if="this.card.list_left" class="p-2 text-70">/</span> {{ this.card.caption_link_left }}

                <span v-if="this.card.list_right" class="p-2 text-70"> || </span>

                {{ this.card.caption_link_right }} <span v-if="this.card.list_right" class="p-2 text-70">/</span>

                <a v-if="this.card.parent_right" :href="'/admin/resources/' + this.card.list_right + '/' + resource.fields.find(el => el.attribute === this.card.parent_right).belongsToId" class="no-underline text-primary font-bold dim router-link-active" data-testid="card-back">→</a>
                <a v-else-if="this.card.list_right" :href="'/admin/resources/' + this.card.list_right + '/'" class="no-underline text-primary font-bold dim router-link-active" data-testid="card-back">→</a>
            </h1>
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',
        'resource',
        'resourceName'
        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },
}
</script>
