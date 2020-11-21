import axios from 'axios'

export default {
    get(params) {
        axios.get(params.url, params.config)
        .then(response => statusHandler(response, params.handler))
        .catch(response => errorHandler(response, params.handler))
        .then(response => alwaysHandler(response, params.handler))
    }
}

function statusHandler(response, handler) {
    switch (response.status) {
        case 200:
            if(handler.success)
                handler.success(response);
            break;
        default:
            if(handler.default)
                handler.default(response);
    }
}
function errorHandler(response, handler) {
    if(handler.error)
        handler.error(response);
}
function alwaysHandler(response, handler) {
    if(handler.always)
        handler.always(response)
}

/**
 * Success: 200
 */