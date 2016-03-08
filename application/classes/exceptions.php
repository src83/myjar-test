<?

/**
 * Custom exception handlers.
 * It generates a Response for the 404 or 500 Exception.
 * `$this` is an instance of appropriate Exception. For example - HTTP_Exception_404
 *
 * General example of use:
 *
 *    try {
 *        ...your code...
 *    } catch(Exception $e) {
 *        throw new HTTP_Exception_500($e);
 *    }
 *
 * @return Response
 *
 */

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {

    /**
     * Handling of 404 exceptions.
     * The user should be shown a nice 404 page.
     * @example throw new HTTP_Exception_404('404: Page not found');
     * @example throw HTTP_Exception::factory(404, 'Page not found');
     */
    public function get_response() {

        $view = View::factory('error');
        $view->error_msg = $this->getMessage();
        return Response::factory()->status(404)->body($view->render());

    }

}


class HTTP_Exception_500 extends Kohana_HTTP_Exception_500 {

    /**
     * Handling of 500 exceptions of Kohana, Database, etc...
     * @example throw new HTTP_Exception_500($e);
     */
    public function get_response() {

        $boundary = str_repeat('-', 130);

        $datetime = date('d-m-Y H:i:s');

        $message = sprintf("%s --> File: %s: Stirng: %d (err: %d)\nMessage: %s\n\n%s\n\n", $datetime, $this->getFile(), $this->getLine(), $this->getCode(), $this->getMessage(), $boundary);

        error_log($message, 3, APPPATH.'logs/errors/e500.log');

        // ---------------

        $view = View::factory('error');

        $view->error_msg = 'An exception is caught. Its recorded here: logs/errors/e500.log';

        return Response::factory()->status(500)->body($view->render());

    }

}
