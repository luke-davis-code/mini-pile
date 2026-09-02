import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/collection',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\PaintingListController::index
* @see app/Http/Controllers/PaintingListController.php:15
* @route '/collection'
*/
indexForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

index.form = indexForm

const PaintingListController = { index }

export default PaintingListController