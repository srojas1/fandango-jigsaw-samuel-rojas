def findSum(numbersArr, targetSum):
    left  = 0
    right = len(numbersArr) - 1
    numbersArr.sort()

    while left < right:
        currentSum = numbersArr[left] + numbersArr[right]
        if currentSum > targetSum:
            right -= 1
        elif currentSum < targetSum:
            left += 1
        else:
            return [numbersArr[left], numbersArr[right]]

    return []

### Test cases ###

#1
sampleArr = [4, 6, 1]
targetSum = 5

#2
sampleArr = [4, 6, 1, -3]
targetSum = 3

#3
sampleArr = [2, 5, 8, 14, 0]
targetSum = 10

print(findSum(sampleArr,targetSum))