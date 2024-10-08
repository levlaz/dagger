import { DaggerSDKError, DaggerSDKErrorOptions } from "./DaggerSDKError.ts"
import { ERROR_CODES, ERROR_NAMES } from "./errors-codes.ts"

/**
 * This error is thrown when the compute function isn't awaited.
 */
export class NotAwaitedRequestError extends DaggerSDKError {
  name = ERROR_NAMES.NotAwaitedRequestError
  code = ERROR_CODES.NotAwaitedRequestError

  /**
   * @hidden
   */
  constructor(message: string, options?: DaggerSDKErrorOptions) {
    super(message, options)
  }
}
