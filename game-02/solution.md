#Game 02 - Solution

For this case, what we need is a mechanism that identifies when the API response (WTF) is not working because of internal errors (such as timeouts). Once the error is identified, the errors must be reported and be counted (in order to have established at what point we should cut off all communication). If we are going to make a call to the API, we first validate if it's possible by calling the mechanism mentioned above, if the mechanism says that is not possible, we must not make more calls to the API and an error is shown to the user. On the other hand, if we use this mechanism and says that it's possible, we call the API without problems.

This mechanism should have states to identify when calls can be made: Enabled, Not enabled. In this way, we manage to keep the service responding (showing a message to the user) despite the errors, preventing the calls, instead of retrying.
