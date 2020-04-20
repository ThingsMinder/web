import jieba
import jieba.posseg as pseg

'''
sentence = "美国新冠肺炎确诊超57万，纽约州死亡人数过万。当地时间4月13日，世卫组织发布最新一期新冠肺炎每日疫情报告。截至欧洲中部时间4月13日10时（北京时间4月13日16时），全球确诊新冠肺炎1773084例（新增76498例），死亡111652例（新增5702例）。其中，疫情最为严重的欧洲区域已确诊913349例（新增33243例），死亡77419例（新增3183例）。"

seg_list = jieba.cut(sentence)

print(' '.join(seg_list))
'''

'''
words = pseg.lcut(sentence)
temp = [(word,flag) for]
'''

'''
def create_word_cloud():
    f = remove_stop_words(f)
    cut_text = word_tokenize(f)
    cut_text = " ".join(cut_text)
    wc = WordCloud(max_words=100,width=2000,height=1200)
    wordcloud = wc.generate(cut_text)
'''  