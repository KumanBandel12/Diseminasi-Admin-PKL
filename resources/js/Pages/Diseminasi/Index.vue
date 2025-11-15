<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import PageHeader from '@/Components/PageHeader.vue'
import FormSelect from '@/Components/FormSelect.vue'
import FormInput from '@/Components/FormInput.vue'
import FormTextarea from '@/Components/FormTextarea.vue'

defineOptions({
    layout: Default
})

</script>

<template>
    <Head title="Input Data Riset" />

    <div class="min-h-screen bg-[var(--color-background)]">
        <div class="max-w-6xl mx-auto sm:p-4">
            <h1 class="font-rakkas mt-3 text-[40px] tracking-wide">Kelola Diseminasi</h1>
            <p class="text-[16px]">Kelola Data dan Interpretasi untuk Diseminasi</p>
        </div>
        <main class="max-w-6xl mx-auto p-4 sm:p-4">
            <div class="bg-[var(--color-surface)] rounded-lg shadow-md p-6 border border-[var(--color-border)]">
                <div class="mb-6">
                    <h2 class="text-[20px] text-[var(--color-text)]">
                        Form Input Data
                    </h2>
                    <p class="text-[16px]">Kelola Data dan Interpretasi untuk Diseminasi</p>
                </div>

                <div class="mb-7">
                    <FormSelect label="Pilih Riset"  required />
                </div>

                <div class="mb-7">
                    <FormSelect label="Pilih Sub Topik"  required />
                </div>

                <div class="mb-7">
                    <FormSelect label="Pilih Jenis Grafik"  required />
                </div>

                <div class="mb-7">
                    <FormInput label="Judul"  placeholder="Masukkan judul visualisasi" required />
                </div>

                <div class="mb-7">
                    <FormTextarea
                        label="Interpretasi"
                        
                        placeholder="Masukkan interpretasi visualisasi"
                        :rows="4"
                        required
                    />
                </div>

                <div class="flex justify-end gap-3">
                    <button type="button" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg transition">
                        Reset
                    </button>
                    <button type="button" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition">
                        Preview
                    </button>
                </div>
            </div>
        </main>
    </div>
</template>
