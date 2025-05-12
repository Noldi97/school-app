<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <div class="grid grid-cols-12 gap-4 md:gap-6">
                <div class="col-span-12 space-y-6 xl:col-span-7">
                    <!-- Metric Group One -->
                    @include('partials.metric-group.metric-group-01')
                    <!-- Metric Group One -->

                    <!-- ====== Chart One Start -->
                    @include('partials.chart.chart-01')
                    <!-- ====== Chart One End -->
                </div>
                <div class="col-span-12 xl:col-span-5">
                    <!-- ====== Chart Two Start -->
                    @include('partials.chart.chart-02')
                    <!-- ====== Chart Two End -->
                </div>

                <div class="col-span-12">
                    <!-- ====== Chart Three Start -->
                    @include('partials.chart.chart-03')
                    <!-- ====== Chart Three End -->
                </div>

                <div class="col-span-12 xl:col-span-7">
                    <!-- ====== Table One Start -->
                    @include('partials.table.table-01')
                    <!-- ====== Table One End -->
                </div>
        </div>
    </div>
</x-layouts.app>
